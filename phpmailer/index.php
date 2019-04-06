<?php

	include('PHPMailer.php');
	include('SMTP.php');

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;

	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; // or 587
	$mail->IsHTML(true);
	$mail->Username = "seasoft.tint.khant@gmail.com";
	$mail->Password = "gdspjkyivebcgwlt";
	$mail->SetFrom("seasoft.tint.khant@gmail.com");
	$mail->AddAddress("aherkersoemin@gmail.com");
	$mail->Subject = "Test";
	$mail->Body = "hello";
	$mail->Send();

?>