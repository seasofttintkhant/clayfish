<?php 
	include($_SERVER['DOCUMENT_ROOT']."/claylish/admin/configs/functions.php");

	if(getMethod() != "POST"){
		header('Location: ../admin_email');
	};

	unsetPopulatedData();
	unsetErrorData();
	setValueByKey("application_email_sender_name_to_admin",sessionGet("old_application_email_data","sender_name"));
	setValueByKey("application_email_sender_addresss_to_admin", sessionGet("old_application_email_data","sender_address"));
	setValueByKey("application_email_admin_address_to_admin", sessionGet("old_application_email_data","admin_address"));
	setValueByKey("application_email_subject_to_admin", sessionGet("old_application_email_data","subject"));
	setValueByKey("application_email_body_to_admin", sessionGet("old_application_email_data","body"));
	setValueByKey("application_email_footer_to_admin", sessionGet("old_application_email_data","footer"));
	sessionUnset("old_application_email_data");
	header('Location: ../');

?>