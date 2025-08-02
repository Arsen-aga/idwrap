<?php
/**
 * ОБРАБОТЧИК ФОРМЫ WORDPRESS
 * Отправка заявок на email, в Telegram и AmoCRM
 * с логированием и поддержкой массивов в POST
 */

// ================== ПОДКЛЮЧЕНИЕ WORDPRESS ================== //

define('WP_USE_THEMES', false);
require_once('../../../wp-load.php'); // путь подставь под себя

if (!function_exists('wp_mail')) {
    die(json_encode([
        'success' => false,
        'message' => 'WordPress не загружен корректно'
    ]));
}

session_start();

// ================== КОНФИГУРАЦИЯ ================== //

define('LOG_DIR', __DIR__ . '/logs/');
define('LOG_FILE', LOG_DIR . 'form_' . date('Y-m-d') . '.log');

define('TELEGRAM_TOKEN', '7621920905:AAF7GpHCTkRsgTIbdVcUQleAmuH3XMuPRFQ');
define('TELEGRAM_CHAT_ID', '-4860360602');

$smtp_config = [
    'enabled'    => true,
    'host'       => 'ssl://mail.hostland.ru',
    'port'       => 465,
    'username'   => 'test@dmgug.ru',
    'password'   => 'iEFmUlX3io',
    'from'       => 'test@dmgug.ru',
    'from_name'  => 'idwrap'
];

$form_config = [
    'required_fields' => ['phone'],

    'email' => [
        'enabled'    => true,
        'recipients' => ['prasolovandreas@yandex.ru'],
        'subject'    => 'Новая заявка с сайта ' . date('d.m.Y H:i'),
    ],

    'telegram' => [
        'enabled' => true
    ],

    'amocrm' => [
        'enabled' => false,
        'lib_path' => __DIR__ . '/libs/SendAmo.php'
    ],

    'messages' => [
        'success'      => 'Спасибо! Ваша заявка принята.',
        'error'        => 'Ошибка при отправке формы',
        'csrf_error'   => 'Повторная отправка формы запрещена',
        'field_error'  => 'Не заполнено обязательное поле: %s'
    ]
];

// ================== ФУНКЦИИ ================== //

/**
 * Рекурсивная очистка данных из $_POST
 */
function sanitize_post_fields($input) {
    $output = [];

    foreach ($input as $key => $value) {
        if (is_array($value)) {
            $output[$key] = sanitize_post_fields($value);
        } else {
            $output[$key] = trim($value);
        }
    }

    return $output;
}

/**
 * Инициализация логов
 */
function initLogs() {
    if (!file_exists(LOG_DIR)) {
        if (!mkdir(LOG_DIR, 0755, true)) {
            error_log('Не удалось создать директорию логов: ' . LOG_DIR);
            return false;
        }
    }
    return true;
}

/**
 * Запись логов
 */
function writeLog($message, $data = []) {
    $log_entry = sprintf(
        "[%s] %s\nIP: %s\nURL: %s\n",
        date('Y-m-d H:i:s'),
        $message,
        $_SERVER['REMOTE_ADDR'] ?? 'unknown',
        $_SERVER['REQUEST_URI'] ?? 'unknown'
    );

    if (!empty($data)) {
        $log_entry .= "Данные:\n" . print_r($data, true) . "\n";
    }

    $log_entry .= "--------------------\n";

    file_put_contents(LOG_FILE, $log_entry, FILE_APPEND);
    error_log(str_replace("\n", " | ", strip_tags($log_entry)));
}

/**
 * Настройка PHPMailer
 */
function configureMailer($phpmailer) {
    global $smtp_config;

    if ($smtp_config['enabled']) {
        $phpmailer->isSMTP();
        $phpmailer->Host       = $smtp_config['host'];
        $phpmailer->Port       = $smtp_config['port'];
        $phpmailer->SMTPSecure = 'ssl';
        $phpmailer->SMTPAuth   = true;
        $phpmailer->Username   = $smtp_config['username'];
        $phpmailer->Password   = $smtp_config['password'];
        $phpmailer->From       = $smtp_config['from'];
        $phpmailer->FromName   = $smtp_config['from_name'];
        $phpmailer->Sender     = $smtp_config['from'];

        $phpmailer->SMTPOptions = [
            'ssl' => [
                'verify_peer'       => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true
            ]
        ];
    }
}
add_action('phpmailer_init', 'configureMailer');

// ================== ОБРАБОТКА ФОРМЫ ================== //

header('Content-Type: application/json; charset=utf-8');

if (!initLogs()) {
    echo json_encode([
        'success' => false,
        'message' => $form_config['messages']['error'],
        'error'   => 'Ошибка создания логов'
    ]);
    exit;
}

try {
    // Получаем и очищаем данные формы
    $form_data = [
        'fields' => sanitize_post_fields($_POST),
        'files'  => $_FILES,
        'token'  => $_POST['newToken'] ?? ''
    ];

    writeLog('Получены данные формы', $form_data);

    // CSRF-защита
    if (empty($form_data['token'])) {
        throw new Exception('Отсутствует токен формы');
    }

    if ($form_data['token'] === ($_SESSION['lastToken'] ?? '')) {
        throw new Exception($form_config['messages']['csrf_error']);
    }
    $_SESSION['lastToken'] = $form_data['token'];

    // Проверка обязательных полей
    foreach ($form_config['required_fields'] as $field) {
        if (empty($form_data['fields'][$field])) {
            throw new Exception(sprintf($form_config['messages']['field_error'], $field));
        }
    }

    // Генерация контента
    $email_content = generateEmailContent($form_data['fields']);
    $telegram_msg = generateTelegramMessage($form_data['fields']);

    // Email
    if ($form_config['email']['enabled']) {
        $email_sent = wp_mail(
            $form_config['email']['recipients'],
            $form_config['email']['subject'],
            $email_content,
            ['Content-Type: text/html; charset=UTF-8']
        );

        if (!$email_sent) {
            global $phpmailer;
            $error = $phpmailer->ErrorInfo ?? 'Неизвестная ошибка отправки';
            throw new Exception("Ошибка отправки email: $error");
        }

        writeLog('Email успешно отправлен');
    }

    // Telegram
    // if ($form_config['telegram']['enabled']) {
    //     $telegram_url = sprintf(
    //         'https://api.telegram.org/bot%s/sendMessage?chat_id=%s&parse_mode=HTML&text=%s',
    //         TELEGRAM_TOKEN,
    //         TELEGRAM_CHAT_ID,
    //         urlencode($telegram_msg)
    //     );

    //     $telegram_response = file_get_contents($telegram_url);
    //     if (!$telegram_response) {
    //         throw new Exception('Ошибка отправки в Telegram');
    //     }

    //     writeLog('Сообщение отправлено в Telegram', [
    //         'response' => json_decode($telegram_response, true)
    //     ]);
    // }

    if ($form_config['telegram']['enabled']) {
    $telegram_url = sprintf(
        'https://api.telegram.org/bot%s/sendMessage?chat_id=%s&parse_mode=HTML&text=%s',
        TELEGRAM_TOKEN,
        TELEGRAM_CHAT_ID,
        urlencode($telegram_msg)
    );

    $telegram_response = file_get_contents($telegram_url);
    if (!$telegram_response) {
        throw new Exception('Ошибка отправки в Telegram');
    }

    writeLog('Сообщение отправлено в Telegram', [
        'response' => json_decode($telegram_response, true)
    ]);

    // ✅ Успешный ответ клиенту
    echo json_encode([
        'success' => true,
        'message' => $form_config['messages']['success']
    ]);

    // Закрытие соединения с клиентом
    if (function_exists('fastcgi_finish_request')) {
        session_write_close();
        fastcgi_finish_request(); // ⚡️ отдаёт ответ клиенту и продолжает скрипт
    } else {
        ignore_user_abort(true);
        ob_end_flush();
        flush();
    }
}

    // AmoCRM
    if ($form_config['amocrm']['enabled'] && file_exists($form_config['amocrm']['lib_path'])) {
        require_once $form_config['amocrm']['lib_path'];

        $amo = new SendAmo(
            '',
            $form_data['fields']['phone'],
            '',
            $telegram_msg
        );

        if (!$amo->start()) {
            throw new Exception('Ошибка интеграции с AmoCRM');
        }

        writeLog('Данные отправлены в AmoCRM');
    }

    // Ответ клиенту
    echo json_encode([
        'success' => true,
        'message' => $form_config['messages']['success']
    ]);

    writeLog('Форма успешно обработана');

} catch (Exception $e) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => $form_config['messages']['error'],
        'error'   => $e->getMessage()
    ]);

    writeLog('Ошибка обработки формы', [
        'error' => $e->getMessage(),
        'trace' => $e->getTraceAsString()
    ]);
}

// ================== ГЕНЕРАТОРЫ СООБЩЕНИЙ ================== //

function generateEmailContent($data) {
    $lines = ["Новая заявка с сайта", ""];

    foreach ($data as $field => $value) {
        if (is_array($value)) {
            $value = implode(', ', array_map('trim', $value));
        } else {
            $value = trim($value);
        }

        $lines[] = "<b>$field:</b> $value<br>";
    }

    return implode("\n", $lines);
}

function generateTelegramMessage($data) {
    $text = "📌 <b>Новая заявка с сайта</b>\n\n";

    foreach ($data as $field => $value) {
        if (is_array($value)) $value = implode(', ', $value);

        $text .= sprintf(
            "<b>%s:</b> %s\n",
            htmlspecialchars($field),
            htmlspecialchars($value)
        );
    }

    $text .= "\n<i>" . date('d.m.Y H:i') . "</i>";
    return $text;
}
