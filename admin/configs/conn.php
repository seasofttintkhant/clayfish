<?php  
	$dbhost = "localhost";  
	$dbuser = "root";  
	$dbpass = "";  
	$dbname = "claylish";  
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
	mysqli_select_db($conn, $dbname);
	$GLOBALS['conn'] = $conn;

	// print_r();

?>