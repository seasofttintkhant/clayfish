<?php 
	include($_SERVER['DOCUMENT_ROOT']."/claylish/admin/configs/functions.php");

	if(getMethod() != "POST"){
		header('Location: ../');
	};

	$validate_fields = [
		"sender_name" => ["required"],
		"sender_address" => ["required","email"],
		"subject" => ["required"],
		"body" => ["required"],
		"footer" => ["required"],
	];

	$_POST = makeEscapeString($_POST);
	populate($_POST);
	$validate_result = validate($validate_fields,$_POST);
	if($validate_result){
		unsetErrorData();
		$_SESSION["old_contact_email_data"] = $_POST;
		$_SESSION["is_method_post"] = true;
		header('Location: ./');
	}	

?>