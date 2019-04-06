<?php 
	include($_SERVER['DOCUMENT_ROOT']."/claylish/admin/configs/functions.php");

	if(getMethod() != "POST"){
		header('Location: ../admin_email');
	};

	unsetPopulatedData();
	unsetErrorData();
	setValueByKey("contact_email_sender_name_to_admin",sessionGet("old_contact_email_data","sender_name"));
	setValueByKey("contact_email_sender_addresss_to_admin", sessionGet("old_contact_email_data","sender_address"));
	setValueByKey("contact_email_admin_address_to_admin", sessionGet("old_contact_email_data","admin_address"));
	setValueByKey("contact_email_subject_to_admin", sessionGet("old_contact_email_data","subject"));
	setValueByKey("contact_email_body_to_admin", sessionGet("old_contact_email_data","body"));
	setValueByKey("contact_email_footer_to_admin", sessionGet("old_contact_email_data","footer"));
	sessionUnset("old_contact_email_data");
	header('Location: ../');

?>