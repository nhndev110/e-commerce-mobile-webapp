<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/app/Exception.php';
require './PHPMailer/app/PHPMailer.php';
require './PHPMailer/app/SMTP.php';
require './PHPMailer/app/POP3.php';

function sendMail($email, $name, $title, $content) {
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'nhannhi2423@gmail.com';
        $mail->Password   = 'dxvzhwuwsmqmlbrw';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 587;
        $mail->SMTPSecure = "tls";
        $mail->CharSet    = "UTF-8";

        //Recipients
        $mail->setFrom('nhannhi2423@gmail.com', 'Nguyễn Hoàng Nhân');
        $mail->addAddress($email, $name);

        //Content
        $mail->isHTML(true);
        $mail->Subject = $title;
        $mail->Body    = $content;
        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }    
}

