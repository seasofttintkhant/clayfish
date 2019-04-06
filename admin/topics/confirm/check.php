<?php 
	include($_SERVER['DOCUMENT_ROOT']."/claylish/admin/configs/functions.php");

	if(getMethod() != "POST"){
		header('Location: ../');
	};

	$validate_fields = [
		"title" => ["required"],
		"content" => ["required"],
	];

	$_POST = makeEscapeString($_POST);
	populate($_POST);
	$validate_result = validate($validate_fields,$_POST);
	if($validate_result){
		unsetErrorData();
		$_SESSION["old_topic_data"] = $_POST;
		$_SESSION["is_method_post"] = true;
		if(isset($_GET["id"])){
			$_SESSION["id"] = $_GET["id"];
		}
		header('Location: ./');
	}	

?>