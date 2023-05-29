<?php

$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;




$mail = new PHPMailer(true);


$mail->isSMTP();
$mail->Mailer = "smtp";
$mail->SMTPAuth = true;
$mail->SMTPDebug=1;
$mail->SMTPSecure="tls";

$mail->Host="smtp.gmail.com";
$mail->Port=587;
$mail->Username = "tonadressemail@gmail.com";
$mail->Password = "tonmotdepasse";

$mail->setFrom($email,$name);
$mail->addAddress("celiagrosjean@hotmail.com","Test");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo'email send';
