<?php
/**
 * ОБРАБОТЧИК ФОРМЫ WORDPRESS
 * Отправка заявок на email, в Telegram и AmoCRM
 * с корректным логированием и JSON-ответами
 */

// ================== ПОДКЛЮЧЕНИЕ WORDPRESS ================== //

// Отключаем загрузку темы для экономии ресурсов
define('WP_USE_THEMES', false);

// Путь к wp-load.php (может отличаться в зависимости от структуры сайта)
// $wp_load_path = dirname(__FILE__, 3) . '/wp-load.php'; // Поднимаемся на 3 уровня вверх
// if (!file_exists($wp_load_path)) {
//     die(json_encode([
//         'success' => false,
//         'message' => 'Не удалось найти WordPress'
//     ]));
// }

// require_once($wp_load_path);
require_once('../../../wp-load.php');
// Проверяем загружено ли ядро WordPress
if (!function_exists('wp_mail')) {
    die(json_encode([
        'success' => false,
        'message' => 'WordPress не загружен корректно'
    ]));
}

// ================== КОНФИГУРАЦИЯ ================== //

session_start();

// Настройки логов
define('LOG_DIR', __DIR__ . '/logs/');
define('LOG_FILE', LOG_DIR . 'form_' . date('Y-m-d') . '.log'); // Логи по дням

// Настройки Telegram
define('TELEGRAM_TOKEN', '7621920905:AAF7GpHCTkRsgTIbdVcUQleAmuH3XMuPRFQ');
define('TELEGRAM_CHAT_ID', '-4860360602');

// Настройки SMTP
$smtp_config = [
    'enabled'    => true,
    'host'       => 'ssl://mail.hostland.ru',
    'port'       => 465,
    'username'   => 'test@dmgug.ru',
    'password'   => 'iEFmUlX3io',
    'from'       => 'test@dmgug.ru', // Должен совпадать с username!
    'from_name'  => 'idwrap'
];

// Настройки формы
$form_config = [
    // Обязательные поля
    'required_fields' => ['phone'],

    // Email уведомления
    'email' => [
        'enabled'    => true,
        'recipients' => ['prasolovandreas@yandex.ru'],
        'subject'    => 'Новая заявка с сайта ' . date('d.m.Y H:i'),
    ],

    // Telegram уведомления
    'telegram' => [
        'enabled' => true
    ],

    // AmoCRM интеграция
    'amocrm' => [
        'enabled' => false,
        'lib_path' => __DIR__ . '/libs/SendAmo.php'
    ],

    // Сообщения
    'messages' => [
        'success'      => 'Спасибо! Ваша заявка принята.',
        'error'        => 'Ошибка при отправке формы',
        'csrf_error'   => 'Повторная отправка формы запрещена',
        'field_error'  => 'Не заполнено обязательное поле: %s'
    ]
];

// ================== ФУНКЦИИ ================== //

/**
 * Инициализация системы логов
 */
function initLogs() {
    // Создаем директорию если не существует
    if (!file_exists(LOG_DIR)) {
        if (!mkdir(LOG_DIR, 0755, true)) {
            error_log('Не удалось создать директорию для логов: ' . LOG_DIR);
            return false;
        }
    }
    return true;
}

/**
 * Запись в лог-файл
 * @param string $message - текст сообщения
 * @param array $data - дополнительные данные
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

    // Пишем в лог-файл
    file_put_contents(LOG_FILE, $log_entry, FILE_APPEND);

    // Дублируем в error_log для дебага
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
        $phpmailer->Sender     = $smtp_config['from']; // Важно для SPF

        $phpmailer->SMTPOptions = [
            'ssl' => [
                'verify_peer'       => false,
                'verify_peer_name'   => false,
                'allow_self_signed'  => true
            ]
        ];
    }
}

// Регистрируем обработчик PHPMailer
add_action('phpmailer_init', 'configureMailer');

// ================== ОБРАБОТКА ФОРМЫ ================== //

// Устанавливаем заголовок для JSON-ответа
header('Content-Type: application/json; charset=utf-8');

// Инициализируем логи
if (!initLogs()) {
    echo json_encode([
        'success' => false,
        'message' => $form_config['messages']['error'],
        'error'   => 'Ошибка создания логов'
    ]);
    exit;
}

try {
    // Получаем данные формы
    $form_data = [
        'fields' => array_map('trim', $_POST),
        'files'  => $_FILES,
        'token'  => $_POST['newToken'] ?? ''
    ];

    writeLog('Получены данные формы', $form_data);

    // Проверка CSRF-токена
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
            throw new Exception(
                sprintf($form_config['messages']['field_error'], $field)
            );
        }
    }

    // Подготовка сообщений
    $email_content = generateEmailContent($form_data['fields']);
    $telegram_msg = generateTelegramMessage($form_data['fields']);

    // Отправка email
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

    // Отправка в Telegram
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
    }

    // Интеграция с AmoCRM
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

    // Успешный ответ
    echo json_encode([
        'success' => true,
        'message' => $form_config['messages']['success']
    ]);

    writeLog('Форма успешно обработана');

} catch (Exception $e) {
    // Ошибка обработки
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

/**
 * Генерация HTML-содержимого для email
 */
function generateEmailContent($data) {
    $html = '<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Новая заявка</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; }
            table { border-collapse: collapse; width: 100%; max-width: 600px; }
            th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
            th { background-color: #f5f5f5; }
        </style>
    </head>
    <body>
        <h2>Новая заявка с сайта</h2>
        <table>';

    foreach ($data as $field => $value) {
        if (is_array($value)) {
            $value = implode(', ', $value);
        }

        $html .= sprintf(
            '<tr><th>%s</th><td>%s</td></tr>',
            htmlspecialchars($field),
            htmlspecialchars($value)
        );
    }

    $html .= '</table>
    </body>
    </html>';

    return $html;
}

/**
 * Генерация сообщения для Telegram
 */
function generateTelegramMessage($data) {
    $text = "📌 <b>Новая заявка с сайта</b>\n\n";

    foreach ($data as $field => $value) {
        if (is_array($value)) {
            $value = implode(', ', $value);
        }

        $text .= sprintf(
            "<b>%s:</b> %s\n",
            htmlspecialchars($field),
            htmlspecialchars($value)
        );
    }

    $text .= "\n<i>" . date('d.m.Y H:i') . "</i>";

    return $text;
}
