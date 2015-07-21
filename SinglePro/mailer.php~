<?php

require 'phpmailer/JPhpMailer.php';
$mail = new JPhpMailer();
$mail->IsSMTP ();
$mail->SMTPDebug=1;
$mail->Host = 'smtp.live.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->Username = "";
$mail->Password = ""; // best to keep this in your config file
$mail->SetFrom ( "anandhupg@gmail.com", 'Rensup' );
$mail->Subject = "fdhjsdfsd";
$mail->Body = "dsfsdfsdfsdfsf";
$mail->AddAddress ( "anandhu.gopi@digitalmesh.com" );
$mail->Send ();
