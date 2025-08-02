<?php
session_start();

/**
 * КОНФИГУРАЦИЯ СКРИПТА
 * Все настройки производятся в этом разделе
 */

// ================== ОСНОВНЫЕ НАСТРОЙКИ ================== //

// Директория для хранения логов (автоматически создается если не существует)
define('LOG_DIR', __DIR__ . '/logs/');

// Имя файла логов
define('LOG_FILE', LOG_DIR . 'form_handler_log.txt');

// Токен вашего Telegram бота (получить у @BotFather)
define('TELEGRAM_TOKEN', '7621920905:AAF7GpHCTkRsgTIbdVcUQleAmuH3XMuPRFQ');

// ID чата куда отправлять уведомления (можно узнать у @userinfobot)
define('TELEGRAM_CHAT_ID', '-4860360602');

// Путь к библиотеке для работы с AmoCRM (если не используется - оставить пустым)
define('AMOCRM_LIB_PATH', __DIR__ . '/libs/SendAmo.php');

/**
 * КОНФИГУРАЦИЯ ФОРМЫ
 * Здесь настраивается поведение обработчика под ваши нужды
 */
$formConfig = [
    // Обязательные поля формы - если не заполнены, форма не отправится
    // Укажите названия полей через запятую, например: ['name', 'phone', 'email']
    'required_fields' => ['phone'],

    // Настройки email уведомлений
    'email' => [
        'enabled' => false, // Включить отправку email (true/false)
        'method' => 'mail', // 'mail' - стандартная функция mail(), 'smtp' - через SMTP сервер
        'from' => 'test@dmgug.ru', // Email отправителя
        'from_name' => 'idwrap', // Имя отправителя
        // Список получателей (можно указать несколько)
        'recipients' => [
            'prasolovandreas@yandex.ru',
            // 'recipient2@example.com'
        ],
        'subject' => 'New form submission from website', // Тема письма
        // Шаблон письма (можно изменить под свои нужды)
        'template' => function($data, $utm) {
            return generateGenericEmailBody($data, $utm);
        },

        // Настройки SMTP (используются только если method = 'smtp')
        'smtp' => [
            'host' => 'ssl://mail.hostland.ru', // SMTP сервер
            'port' => 465, // Порт SMTP (обычно 587 для TLS, 465 для SSL)
            'secure' => 'ssl', // Тип шифрования (tls/ssl)
            'auth' => true, // Требуется ли авторизация
            'username' => 'test@dmgug.ru', // Логин SMTP
            'password' => 'iEFmUlX3io', // Пароль SMTP
            'debug' => 0 // Уровень дебага (0 - выкл, 1 - клиент, 2 - клиент+сервер)
        ]
    ],

    // Настройки Telegram уведомлений
    'telegram' => [
        'enabled' => true, // Включить отправку в Telegram (true/false)
        // Шаблон сообщения для Telegram
        'template' => function($data, $utm) {
            return generateGenericTelegramMessage($data, $utm);
        }
    ],

    // Настройки интеграции с AmoCRM
    'amocrm' => [
        'enabled' => false, // Включить интеграцию с AmoCRM (true/false)
        // Шаблон текста для AmoCRM
        'template' => function($data) {
            return generateGenericAmoText($data);
        }
    ],

    // Настройки загрузки файлов
    'file_upload' => [
        'enabled' => false, // Разрешить загрузку файлов (true/false)
        'max_size' => 5 * 1024 * 1024, // Максимальный размер файла (5MB)
        // Разрешенные типы файлов
        'allowed_types' => ['jpg', 'png', 'pdf', 'doc', 'docx']
    ],

    // Сообщения
    'success_message' => 'Thank you! Your form has been submitted successfully.', // Сообщение при успешной отправке
    'error_message' => 'An error occurred while processing your form. Please try again later.' // Сообщение при ошибке
];

// ================== ФУНКЦИИ ЛОГИРОВАНИЯ ================== //

/**
 * Инициализация системы логов
 * Создает директорию для логов если она не существует
 */
function initLogs() {
    if (!file_exists(LOG_DIR)) {
        mkdir(LOG_DIR, 0777, true);
    }
}

/**
 * Запись информации в лог-файл
 * @param string $message - сообщение для записи
 * @param array $data - дополнительные данные для логирования
 */
function writeLog($message, $data = []) {
    $date = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $uri = $_SERVER['REQUEST_URI'] ?? 'unknown';
    $referer = $_SERVER['HTTP_REFERER'] ?? 'none';

    $entry = "[$date][$ip][$uri][Ref:$referer] $message\n";

    if (!empty($data)) {
        $entry .= "Data: " . json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . "\n";
    }

    file_put_contents(LOG_FILE, $entry, FILE_APPEND);
}

// ================== ОСНОВНОЙ КОД ================== //
initLogs();
header("Content-Type: text/html; charset=utf-8");

try {
    // 1. Получаем и очищаем данные формы
    $formData = [
        'fields' => array_map('trim', $_POST), // Все текстовые поля
        'files' => $_FILES, // Все загружаемые файлы
        'token' => $_POST['newToken'] ?? '' // Токен формы для защиты
    ];

    writeLog("Form submission started", $formData);

    // 2. Проверка токена формы (защита от повторной отправки)
    if ($formData['token'] === ($_SESSION['lastToken'] ?? '')) {
        writeLog("Form resubmission detected");
        die('Form resubmission is not allowed');
    }
    $_SESSION['lastToken'] = $formData['token'];

    // 3. Проверяем обязательные поля
    foreach ($formConfig['required_fields'] as $field) {
        if (empty($formData['fields'][$field])) {
            writeLog("Required field missing: $field");
            die("Field '$field' is required");
        }
    }

    // 4. Собираем UTM-метки (для аналитики)
    $utmData = [
        'source' => $_SESSION['utm_source'] ?? '',
        'medium' => $_SESSION['utm_medium'] ?? '',
        'campaign' => $_SESSION['utm_campaign'] ?? '',
        'content' => $_SESSION['utm_content'] ?? '',
        'term' => $_SESSION['utm_term'] ?? '',
        'ym_uid' => $_COOKIE['_ym_uid'] ?? ''
    ];

    // 5. Обрабатываем файлы (если разрешено в настройках)
    $uploadedFiles = [];
    if ($formConfig['file_upload']['enabled'] && !empty($formData['files'])) {
        foreach ($formData['files'] as $fileField => $fileData) {
            if ($fileData['error'] === UPLOAD_ERR_OK) {
                // Проверяем тип файла
                $fileExt = strtolower(pathinfo($fileData['name'], PATHINFO_EXTENSION));
                if (!in_array($fileExt, $formConfig['file_upload']['allowed_types'])) {
                    throw new Exception("Invalid file type: $fileExt");
                }

                // Проверяем размер файла
                if ($fileData['size'] > $formConfig['file_upload']['max_size']) {
                    throw new Exception("File size exceeds limit: {$fileData['name']}");
                }

                $uploadedFiles[$fileField] = $fileData;
            }
        }
    }

    // 6. Отправляем email (если включено в настройках)
    if ($formConfig['email']['enabled']) {
        require 'phpMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer();
        $mail->CharSet = 'UTF-8';
        $mail->setLanguage('ru', 'phpmailer/language/');

        // Настройка метода отправки
        if ($formConfig['email']['method'] === 'smtp') {
            $mail->isSMTP();
            $mail->Host = $formConfig['email']['smtp']['host'];
            $mail->Port = $formConfig['email']['smtp']['port'];

            if ($formConfig['email']['smtp']['secure'] === 'tls') {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            } elseif ($formConfig['email']['smtp']['secure'] === 'ssl') {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            }

            if ($formConfig['email']['smtp']['auth']) {
                $mail->SMTPAuth = true;
                $mail->Username = $formConfig['email']['smtp']['username'];
                $mail->Password = $formConfig['email']['smtp']['password'];
            }

            $mail->SMTPDebug = $formConfig['email']['smtp']['debug'];
        } else {
            $mail->isMail(); // Используем стандартную функцию mail()
        }

        // Устанавливаем отправителя (настройки из конфига)
        $mail->setFrom($formConfig['email']['from'], $formConfig['email']['from_name']);

        // Добавляем получателей (все указанные в конфиге)
        foreach ($formConfig['email']['recipients'] as $recipient) {
            $mail->addAddress($recipient);
        }

        // Формируем тело письма по шаблону
        $emailBody = $formConfig['email']['template']($formData['fields'], $utmData);
        $mail->isHTML(true);
        $mail->Subject = $formConfig['email']['subject'];
        $mail->Body = $emailBody;

        // Прикрепляем файлы если они есть
        foreach ($uploadedFiles as $file) {
            $mail->addAttachment($file['tmp_name'], $file['name']);
        }

        if (!$mail->send()) {
            throw new Exception("Email sending error: " . $mail->ErrorInfo);
        }
        writeLog("Email sent successfully");
    }

    // 7. Отправляем в Telegram (если включено в настройках)
    if ($formConfig['telegram']['enabled']) {
        $telegramMessage = $formConfig['telegram']['template']($formData['fields'], $utmData);
        $telegramUrl = sprintf(
            "https://api.telegram.org/bot%s/sendMessage?chat_id=%s&parse_mode=html&text=%s",
            TELEGRAM_TOKEN,
            TELEGRAM_CHAT_ID,
            urlencode($telegramMessage)
        );

        $telegramResponse = @file_get_contents($telegramUrl);
        if (!$telegramResponse) {
            throw new Exception("Telegram API error");
        }
        writeLog("Message sent to Telegram");
    }

    // 8. Отправляем в AmoCRM (если включено в настройках и библиотека существует)
    if ($formConfig['amocrm']['enabled'] && file_exists(AMOCRM_LIB_PATH)) {
        require_once AMOCRM_LIB_PATH;
        $amoText = $formConfig['amocrm']['template']($formData['fields']);

        $phone = $formData['fields']['phone'] ?? '';
        $sendAmo = new SendAmo('', $phone, '', $amoText);
        $sendAmo->setUTM(
            $utmData['source'],
            $utmData['medium'],
            $utmData['campaign'],
            $utmData['content'],
            $utmData['term'],
            $utmData['ym_uid']
        );

        $amoResult = $sendAmo->start();
        writeLog("AmoCRM submission result", ['result' => $amoResult]);
    }

    // 9. Отправляем сообщение об успехе (из конфига)
    echo $formConfig['success_message'];
    writeLog("Form processed successfully");

} catch (Exception $e) {
    // В случае ошибки отправляем сообщение об ошибке (из конфига) и пишем в лог
    writeLog("Form processing error", [
        'error' => $e->getMessage(),
        'trace' => $e->getTraceAsString()
    ]);

    header('Content-Type: application/json');
    echo json_encode([
        'success' => false,
        'message' => $formConfig['error_message'],
        'error' => $e->getMessage() // Опционально, для дебага
    ]);
    exit;
}

// ================== ШАБЛОНЫ СООБЩЕНИЙ ================== //

/**
 * Генерация HTML тела письма
 * @param array $formData - данные формы
 * @param array $utmData - UTM-метки
 * @return string - HTML код письма
 */
function generateGenericEmailBody($formData, $utmData) {
    $body = "<h2>New form submission</h2><hr>";

    // Выводим все поля формы
    foreach ($formData as $field => $value) {
        if (is_array($value)) {
            $value = implode(', ', $value);
        }
        if (!empty($value)) {
            $body .= "<p><strong>" . htmlspecialchars($field) . ":</strong> " . htmlspecialchars($value) . "</p>";
        }
    }

    // Выводим UTM-метки
    $body .= "<h3>UTM Parameters</h3>";
    foreach ($utmData as $field => $value) {
        if (!empty($value)) {
            $body .= "<p><strong>$field:</strong> $value</p>";
        }
    }

    return $body;
}

/**
 * Генерация сообщения для Telegram
 * @param array $formData - данные формы
 * @param array $utmData - UTM-метки
 * @return string - текст сообщения
 */
function generateGenericTelegramMessage($formData, $utmData) {
    $message = "📌 <b>New form submission</b>\n\n";

    // Выводим все поля формы
    foreach ($formData as $field => $value) {
        if (is_array($value)) {
            $value = implode(', ', $value);
        }
        if (!empty($value)) {
            $message .= "<b>" . htmlspecialchars($field) . ":</b> " . htmlspecialchars($value) . "\n";
        }
    }

    // Выводим UTM-метки
    $message .= "\n<b>UTM Parameters</b>\n";
    foreach ($utmData as $field => $value) {
        if (!empty($value)) {
            $message .= "<b>$field:</b> $value\n";
        }
    }

    return $message;
}

/**
 * Генерация текста для AmoCRM
 * @param array $formData - данные формы
 * @return string - текст для AmoCRM
 */
function generateGenericAmoText($formData) {
    $text = "Form submission details:\n\n";

    // Выводим все поля формы
    foreach ($formData as $field => $value) {
        if (is_array($value)) {
            $value = implode(', ', $value);
        }
        if (!empty($value)) {
            $text .= "$field: $value\n";
        }
    }

    return $text;
}
