<?php
$to = 'dym8750@gmail.com,r_kosarev@ukr.net';//сюда приходят заявки
$from = $_POST['email']; //какае-то почта из которой приходит заявка
$subject = 'Форма заявки "Заказ на сайт книги"';

$username = $_POST['name'];
// $userphone = $_POST['tel'];
$usermail = $_POST['email'];
$usermessage = $_POST['message'];

$message = "
    <html>
        <head>
        <title>{$subject}</title>
        <style>body{font: normal 1rem/1.5 sans-serif;}</style>
        </head>
        <body>
        <h2>Заявка от " . $username . "</h2>
        <p>Имя: " . $_POST['name'] . "</p>
        <p>Email: " . $_POST['email'] . "</p>.
        <p>Message: " . $_POST['message'] . "</p>"
        
        ;
$message .= "</body>
        </html>
    ";
$headers = 'From: ' . $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
mail($to, $subject, $message, $headers);

header('Location: thanks-rus.html'); 
?>
