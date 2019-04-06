<?php 
	include($_SERVER['DOCUMENT_ROOT']."/claylish/admin/configs/functions.php");

	if(getMethod() != "POST"){
		header('Location: ../');
	};

	unsetPopulatedData();
	unsetErrorData();

	$title = sessionGet("old_topic_data","title");
	$content = sessionGet("old_topic_data","content");
	$status = sessionGet("old_topic_data","status");
	$published_at = 0;
	if($status){
		$published_at = time();
	}
	$created_at = time();

	if(isset($_POST["id"]) && !empty($_POST["id"])){
		$id = $_POST["id"];
		$sql = "UPDATE topics SET title = '$title', content = '$content', published_at = '$published_at' WHERE id = '$id' AND deleted = 0";
	}else{
		$sql = "INSERT INTO topics (id, title, content, status, published_at, created_at, deleted) VALUES (NULL, '$title', '$content', '$status', '$published_at', '$created_at', '0');";
	}
		
	$conn = $GLOBALS["conn"];
	mysqli_query($conn,$sql);
	sessionUnset("old_topic_data");
	header('Location: ../');

?>