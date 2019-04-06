<?php 
	include($_SERVER['DOCUMENT_ROOT']."/claylish/admin/configs/functions.php");

	// if(getMethod() != "POST"){
	// 	header('Location: ../');
	// };	
	$id = $_GET["id"];
	if(isset($id) && !empty($id)){
		$sql = "UPDATE topics SET deleted = 1 WHERE id = '$id'";
		$conn = $GLOBALS["conn"];
		mysqli_query($conn,$sql);
		header('Location: ../');
	}else{
		header('Location: ../');
	}

?>