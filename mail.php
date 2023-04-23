<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $email = $_POST["email"];
    $name = $_POST["name"];
    $subject = $_POST["subject"];

    $msg ='<!DOCTYPE html>
    <html lang="en"> 
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <p> Good Day! <strong> '. $name.'! </strong></p>
        <p>Thank you for your feedback!</p>
        <br>
        A medicine a day, keeps the Doctor away!<br>
        <strong></b>Ilagan Pharmacy</strong>

    </body>
    </html>';


    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "dextergracilla@gmail.com";
    $mail->Password = "uddmpendrwdqqnfu";
    $mail->SMTPSecure = "tls";
    $mail->Port = "587";

    $mail->setFrom("dextergracilla@gmail.com","Ilagan Pharmacy");
    $mail->addAddress($email);
    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $msg;

    $mail->send();
    header('location:index.html');
}
?>