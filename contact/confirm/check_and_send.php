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
		$body = getValueByKey("contact_email_body_to_user")."\r\n";
		$body .= "**********************************************************"."\r\n";
		$body .= "お名前 : ".sessionGet("old_contact_email_data","name")."\r\n";
		$body .= "ふりがな : ".sessionGet("old_contact_email_data","kana_name")."\r\n";
		$body .= "件名 : ".sessionGet("old_contact_email_data","subject")."\r\n";
		$body .= "会社名 : ".sessionGet("old_contact_email_data","company_name")."\r\n";
		$body .= "ご住所 : ".sessionGet("old_contact_email_data","prefecture")."\r\n";
		$body .= "市区町村 : ".sessionGet("old_contact_email_data","municipalicty")."\r\n";
		$body .= "連絡先電話番号 : ".sessionGet("old_contact_email_data","phone_number")."\r\n";
		$body .= "メールアドレス : ".sessionGet("old_contact_email_data","email")."\r\n";
		$body .= "お問い合わせ内容 : ".nl2br(sessionGet("old_contact_email_data","content"))."\r\n";
		$body .= "**********************************************************"."\r\n";
		$body .= nl2br(getValueByKey("contact_email_footer_to_user"));

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
		$mail->SetFrom(getValueByKey("contact_email_sender_addresss_to_user"),getValueByKey("contact_email_sender_name_to_user"));
		$mail->AddAddress(sessionGet("old_contact_email_data","email"));
		$mail->Subject = getValueByKey("contact_email_subject_to_user");
		$mail->Body = nl2br($body);
		$mail->Send();
	}


	function sendMailToAdmin(){
		$body = getValueByKey("contact_email_body_to_admin")."\r\n";
		$body .= "**********************************************************"."\r\n";
		$body .= "お名前 : ".sessionGet("old_contact_email_data","name")."\r\n";
		$body .= "ふりがな : ".sessionGet("old_contact_email_data","kana_name")."\r\n";
		$body .= "件名 : ".sessionGet("old_contact_email_data","subject")."\r\n";
		$body .= "会社名 : ".sessionGet("old_contact_email_data","company_name")."\r\n";
		$body .= "ご住所 : ".sessionGet("old_contact_email_data","prefecture")."\r\n";
		$body .= "市区町村 : ".sessionGet("old_contact_email_data","municipalicty")."\r\n";
		$body .= "連絡先電話番号 : ".sessionGet("old_contact_email_data","phone_number")."\r\n";
		$body .= "メールアドレス : ".sessionGet("old_contact_email_data","email")."\r\n";
		$body .= "お問い合わせ内容 : ".nl2br(sessionGet("old_contact_email_data","content"))."\r\n";
		$body .= "**********************************************************"."\r\n";
		$body .= nl2br(getValueByKey("contact_email_footer_to_admin"));

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
		$mail->SetFrom(getValueByKey("contact_email_sender_addresss_to_admin"),getValueByKey("contact_email_sender_name_to_admin"));
		$mail->AddAddress(getValueByKey("contact_email_admin_address_to_admin"));
		$mail->Subject = getValueByKey("contact_email_subject_to_admin");
		$mail->Body = nl2br($body);
		$mail->Send();
	}

	sessionUnset("old_contact_email_data");
	unsetPopulatedData();
	unsetErrorData();
	echo "<script>window.location.assign('../')</script>";
?>