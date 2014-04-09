<?php

// Initialize PHP Mailer
require_once('class.phpmailer.php');
require_once('class.pop3.php');
require_once('class.smtp.php');

$mail             = new PHPMailer();
$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "vas.notification@gmail.com";      // GMAIL username
$mail->Password   = "Bjjmpr411";            // GMAIL password

?>