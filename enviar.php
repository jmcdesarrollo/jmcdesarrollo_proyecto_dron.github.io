<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$header = 'From: ' . $mail " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain \r\n";

$message = "Este mensaje fue enviado por: " .$name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Su teléfono es: " . $phone . " \r\n";
$message .= "Asunto: " . $subject . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'ger2708@gmail.com';
$asunto = 'Formulario de contacto web';

mail($para, $asunto, utf8_decode($message), $header);

header("Location: index.html");
?>

