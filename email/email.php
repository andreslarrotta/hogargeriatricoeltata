<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);

$name 	 = $_POST['name'];
$email   = $_POST['email'];
$phone   = $_POST['phone'];
$message = $_POST['message'];

$template = file_get_contents('template.php');

$replacements = array(
    '({name})' 	  => $name,
    '({email})'   => $email,
    '({phone})'   => $phone,
    '({message})' => $message
);

$message = preg_replace( array_keys( $replacements ), array_values( $replacements ), $template );

try {

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'hogargeriatricoeltata@gmail.com';
    $mail->Password = 'eltata2017';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('essss');

    $mail->setFrom('hogargeriatricoeltata@gmail.com', 'Página Web');
    $mail->addAddress('andreslarrottapino911@gmail.com');
    $mail->addReplyTo($email, $name);
    $mail->addBCC('cc.cruz.caceres@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Nuevo mensaje desde la página web';
    $mail->Body    = $message;

    $mail->send();
    echo json_encode(array(
        'result' => 'ok',
    ));
} catch (Exception $e) {
    echo json_encode(array(
        'result' => 'error',
    ));
}
