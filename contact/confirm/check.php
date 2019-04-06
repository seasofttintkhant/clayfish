<?php 
	include($_SERVER['DOCUMENT_ROOT']."/claylish/admin/configs/functions.php");

	if(getMethod() != "POST"){
		header('Location: ../');
	};

	$validate_fields = [
		"name" => ["required"],
		"kana_name" => ["required"],
		"subject" => ["required"],
		"company_name" => ["required"],
		"prefecture" => ["required"],
		"municipalicty" => ["required"],
		"phone_number" => ["required"],
		"email" => ["required","email"],
		"content" => ["required"]
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



	// print_r($_POST);

?>