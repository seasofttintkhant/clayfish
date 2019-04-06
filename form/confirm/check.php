<?php 
	include($_SERVER['DOCUMENT_ROOT']."/claylish/admin/configs/functions.php");

	if(getMethod() != "POST"){
		header('Location: ../');
	};

	$validate_fields = [
		"desired_transaction" => ["required"],
		"desired_loan_amount" => ["required"],
		"desired_loan_date" => ["required"],
		"business_name" => ["required"],
		"industry" => ["required"],
		"representative_director" => ["required"],
		"furigana" => ["required"],
		"name_of_in_charge" => ["required"],
		"prefecture" => ["required"],
		"municipality" => ["required"],
		"phone_number" => ["required"],
		"email" => ["required","email"],
		"contact_method" => ["required"],
	];

	$_POST = makeEscapeString($_POST);
	populate($_POST);
	$validate_result = validate($validate_fields,$_POST);
	if($validate_result){
		unsetErrorData();
		$_SESSION["old_application_email_data"] = $_POST;
		$_SESSION["is_method_post"] = true;
		header('Location: ./');
	}	
?>