<?php
require 'phpmailer/PHPMailerAutoload.php';
$to='';
$message = "Line 1\r\nLine 2\r\nLine 3";
$message = wordwrap($message, 70, "\r\n");
$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'anandhupg@gmail.com';
$mail->Password = '@nandhu94964624078615';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->From = 'from@example.com';
$mail->FromName = 'Mailer';
$mail->addAddress('anandhu.gopi@digitalmesh.com', 'Joe User');

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$mail->send();
if(!$mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo 'Message has been sent';
}
?>