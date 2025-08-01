<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require(__DIR__."/PHPMailer/src/Exception.php");
require(__DIR__."/PHPMailer/src/PHPMailer.php");
require(__DIR__ . "/PHPMailer/src/SMTP.php");
if ($_POST['newToken'] == $_SESSION['lastToken']) {
} else {

  $_SESSION['lastToken'] = $_POST['newToken'];
  $mail = new PHPMailer(true);
  $mail->CharSet = 'UTF-8';
  $mail->setLanguage('ru', 'phpmailer/language/');
  $mail->IsHTML(true);


  $mail->Host = 'ssl://mail.hostland.ru';
  $mail->Port = 465;
  $mail->Username = 'test@dmgug.ru';
  $mail->Password = 'iEFmUlX3io';

	//От кого письмо
	$mail->setFrom('test@dmgug.ru', 'idwrap'); // Указать нужный E-mail
  //Кому отправить
  $mail->addAddress('tatarin080820020808@yandex.ru'); // Указать нужный E-mail
  //Тема письма
  $mail->Subject = 'Заявка с сайта idwrap';
	$phone = trim($_POST['phone']);
  setcookie('phone', $phone);
  $_SESSION["phone"] = $phone;
  $type = trim($_POST['type']);
  $method = trim($_POST['method']);
  setcookie('method', $method);
  $_SESSION["method"] = $method;
  $element = trim($_POST['method']);
  $step1 = trim($_POST['step1']);
  $step2 = trim($_POST['step2']);
  $step3 = trim($_POST['step3']);
  $step4 = trim($_POST['step4']);
  $call_time = trim($_POST['call_time']);
  $call_time_input = trim($_POST['call_time_input']);

  $rating = trim($_POST['rating']);


  //Тело письма
  $body = '<h1>' . $from . '</h1>';
  if (!empty($phone)) {
    $body .= '<p><strong>Телефон:</strong> ' . $phone . '</p>';
  }
  if (!empty($method)) {
    $body .= '<p><strong>Способ связи:</strong> ' . $method . '</p>';
  }
  if (!empty($call_time)) {
    $body .= '<p><strong>Выберите время звонка:</strong> ' . $call_time . '</p>';
  }
  if (!empty($call_time_input)) {
    $body .= '<p><strong>Когда вам будет удобно принять звонок?:</strong> ' . $call_time_input . '</p>';
  }
  if (!empty($elements_string)) {
    $body .= '<p><strong>Выбранные элементы окраски автомобиля:</strong> ' . $elements_string . '</p>';
  }
  if (!empty($step1)) {
    $body .= '<p><strong>01. Какую часть автомобиля вы планируете оклеить?L:</strong> ' . $step1 . '</p>';
  }
  if (!empty($step2)) {
    $body .= '<p><strong>02. Что вы хотели бы сделать?L:</strong> ' . $step2 . '</p>';
  }
  if (!empty($step3)) {
    $body .= '<p><strong>03. Когда вы хотели бы провести оклейку?L:</strong> ' . $step3 . '</p>';
  }
  if (!empty($step4)) {
    $body .= '<p><strong>04. Выберите подарок при заказе оклейки:</strong> ' . $step4 . '</p>';
  }
  if (!empty($type)) {
    $body .= '<p><strong>Выберите вид оклейки и подарок:</strong> ' . $type . '</p>';
  }
  $mail->Body = $body;

	//Отправляем
	if (!$mail->send()) {
		$message = 'Ошибка!';
	} else {
		$message = 'Данные отправлены!';
	}

	$response = ['message' => $message];

	header('Content-type: application/json');
	echo json_encode($response);
}
?>