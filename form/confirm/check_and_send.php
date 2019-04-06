<?php 
	include($_SERVER['DOCUMENT_ROOT']."/claylish/admin/configs/functions.php");
	include($_SERVER['DOCUMENT_ROOT']."/claylish/configs/emails/PHPMailer.php");
	include($_SERVER['DOCUMENT_ROOT']."/claylish/configs/emails/SMTP.php");

	if(getMethod() != "POST"){
		header('Location: ../');
	};

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;

	sendMailToUser();
	sendMailToAdmin();

	function sendMailToUser(){
		$body = getValueByKey("application_email_body_to_user")."\r\n";
		$body .= "**********************************************************"."\r\n";
		$body .= "ご希望の取引 : ".sessionGet("old_application_email_data","desired_transaction")."\r\n";
		$body .= "融資希望額 : ".sessionGet("old_application_email_data","desired_loan_amount")."\r\n";
		$body .= "融資希望日 : ".sessionGet("old_application_email_data","desired_loan_date")."\r\n";
		$body .= "商号・屋号 : ".sessionGet("old_application_email_data","business_name")."\r\n";
		$body .= "業種 : ".sessionGet("old_application_email_data","industry")."\r\n";
		$body .= "代表取締役 : ".sessionGet("old_application_email_data","representative_director")."\r\n";
		$body .= "フリガナ : ".sessionGet("old_application_email_data","furigana")."\r\n";
		$body .= "お申込み担当者名 : ".sessionGet("old_application_email_data","name_of_in_charge")."\r\n";
		$body .= "都道府県 : ".sessionGet("old_application_email_data","prefecture")."\r\n";
		$body .= "市区町村 : ".sessionGet("old_application_email_data","municipality")."\r\n";
		$body .= "お電話番号 : ".sessionGet("old_application_email_data","phone_number")."\r\n";
		$body .= "メールアドレス : ".sessionGet("old_application_email_data","email")."\r\n";
		$body .= "希望する連絡方法 : ".sessionGet("old_application_email_data","contact_method")."\r\n";
		$body .= "**********************************************************"."\r\n";
		$body .= nl2br(getValueByKey("application_email_footer_to_user"));

		$mail = new PHPMailer(); // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465; // or 587
		$mail->IsHTML(true);
		$mail->Username = "seasoft.tint.khant@gmail.com";
		$mail->Password = "gdspjkyivebcgwlt";
		$mail->SetFrom(getValueByKey("application_email_sender_addresss_to_user"),getValueByKey("application_email_sender_name_to_user"));
		$mail->AddAddress(sessionGet("old_application_email_data","email"));
		$mail->Subject = getValueByKey("application_email_subject_to_admin");
		$mail->Body = nl2br($body);
		$mail->Send();
	}


	function sendMailToAdmin(){
		$body = getValueByKey("application_email_body_to_admin")."\r\n";
		$body .= "**********************************************************"."\r\n";
		$body .= "ご希望の取引 : ".sessionGet("old_application_email_data","desired_transaction")."\r\n";
		$body .= "融資希望額 : ".sessionGet("old_application_email_data","desired_loan_amount")."\r\n";
		$body .= "融資希望日 : ".sessionGet("old_application_email_data","desired_loan_date")."\r\n";
		$body .= "商号・屋号 : ".sessionGet("old_application_email_data","business_name")."\r\n";
		$body .= "業種 : ".sessionGet("old_application_email_data","industry")."\r\n";
		$body .= "代表取締役 : ".sessionGet("old_application_email_data","representative_director")."\r\n";
		$body .= "フリガナ : ".sessionGet("old_application_email_data","furigana")."\r\n";
		$body .= "お申込み担当者名 : ".sessionGet("old_application_email_data","name_of_in_charge")."\r\n";
		$body .= "都道府県 : ".sessionGet("old_application_email_data","prefecture")."\r\n";
		$body .= "市区町村 : ".sessionGet("old_application_email_data","municipality")."\r\n";
		$body .= "お電話番号 : ".sessionGet("old_application_email_data","phone_number")."\r\n";
		$body .= "メールアドレス : ".sessionGet("old_application_email_data","email")."\r\n";
		$body .= "希望する連絡方法 : ".sessionGet("old_application_email_data","contact_method")."\r\n";
		$body .= "**********************************************************"."\r\n";
		$body .= nl2br(getValueByKey("application_email_footer_to_admin"));

		$mail = new PHPMailer(); // create a new object
		$mail->IsSMTP(); // enable SMTP
		$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
		$mail->SMTPAuth = true; // authentication enabled
		$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465; // or 587
		$mail->IsHTML(true);
		$mail->Username = "seasoft.tint.khant@gmail.com";
		$mail->Password = "gdspjkyivebcgwlt";
		$mail->SetFrom(getValueByKey("application_email_sender_addresss_to_admin"),getValueByKey("application_email_sender_name_to_admin"));
		$mail->AddAddress(getValueByKey("application_email_admin_address_to_admin"));
		$mail->Subject = getValueByKey("application_email_subject_to_admin");
		$mail->Body = nl2br($body);
		$mail->Send();
	}

	sessionUnset("old_application_email_data");
	unsetPopulatedData();
	unsetErrorData();
	echo "<script>window.location.assign('../application.php')</script>";
?>