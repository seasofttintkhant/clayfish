<?php 

	if( !session_id() )
	{
	    session_start();
	}

	include($_SERVER['DOCUMENT_ROOT']."/claylish/admin/configs/conn.php");

	function incHeader(){
		include($_SERVER['DOCUMENT_ROOT']."/claylish/admin/layout/header.php");
	}

	function incFooter(){
		include($_SERVER['DOCUMENT_ROOT']."/claylish/admin/layout/footer.php");
	}

	function validate($params,$data){
		$errors = [];
		if(isset($data) && !empty($data)){
			foreach($params as $field_name => $rules){
				if(array_key_exists($field_name,$data)){
					$field_value = $data[$field_name];
					$message = validationCheck($field_value,$rules);
					if(isset($message)){
						$errors[$field_name] = $message;
					}
				}
			}
		}
	    if(count($errors) > 0 )
	    {    
	        $_SESSION['errors']=$errors;
	        redirectBack();
	        return false;
	    }else{
	    	return true;
	    }
	}

	function validationCheck($field_value = "",$rules){
		if(isset($rules) && !empty($rules)){
			foreach($rules as $rule){
				if($rule == "required"){
					if(empty($field_value)){
						return "This filed is required!";
					}
				}	
				if($rule == "email"){
					if(!filter_var($field_value, FILTER_VALIDATE_EMAIL)){
						return "Please enter valid email!";
					}
				}
			}
		}
	}

	function makeEscapeString($data,$arr = false){
		$conn = $GLOBALS["conn"];
		if($arr = true){
			foreach($data as $field){
				$field = strip_tags(trim(mysqli_escape_string($conn,$field)));
			}
			return $data;
		}else{
			$data = strip_tags(trim(mysqli_escape_string($conn,$data)));
			return $data;
		}
	}

	function populatedOrData($first,$second){
		if(isset($_SESSION["populated_data"]) && !empty($_SESSION["populated_data"])){
			return $first;
		}elseif(isset($second)){
			return $second;
		}
		return "";
	}

	function firstOrSecond($first,$second){
		if(isset($first) && !empty($first)){
			return $first;
		}elseif(isset($second)){
			return $second;
		}
		return "";
	}

	function redirectBack()
	{
	    header('Location: ' . $_SERVER['HTTP_REFERER']);
	}

	function getPrevLink()
	{
	    return $_SERVER['HTTP_REFERER'];
	}

	function getMethod(){
		return $_SERVER['REQUEST_METHOD'];
	}

	function populate($post_data){
		$populate_data = [];
		if(isset($post_data) && !empty($post_data)){
			foreach ($post_data as $field_name => $field_value) {
				$populate_data[$field_name] = $field_value;
			}
		    if(count($populate_data) > 0 )
		    {    
		        $_SESSION['populated_data']=$populate_data;
		    }
		}
	}

	function getErrorData($field_name){
		$error_data = [];
		if(isset($field_name) && !empty($field_name)){
			if(isset($_SESSION['errors']) && !empty($_SESSION['errors'])){
				$error_data = $_SESSION['errors'];
				if(isset($error_data[$field_name]) && !empty($error_data[$field_name])){
					return $error_data[$field_name];
				}else{
					return "";
				}
			}
			return "";
		}
		return "";
	}

	function getPopulateData($field_name){
		$populated_data = [];
		if(isset($field_name) && !empty($field_name)){
			if(isset($_SESSION['populated_data']) && !empty($_SESSION['populated_data'])){
				$populated_data = $_SESSION['populated_data'];
				if(isset($populated_data[$field_name]) && !empty($populated_data[$field_name])){
					return $populated_data[$field_name];
				}else{
					return "";
				}
			}
			return "";
		}
		return "";
	}

	function unsetPopulatedData(){
		if(isset($_SESSION) && !empty($_SESSION)){
			if(isset($_SESSION["populated_data"]) && !empty($_SESSION["populated_data"])){
				unset($_SESSION["populated_data"]);
			}
		}
	}

	function unsetErrorData(){
		if(isset($_SESSION) && !empty($_SESSION)){
			if(isset($_SESSION["errors"]) && !empty($_SESSION["errors"])){
				unset($_SESSION["errors"]);
			}
		}
	}

	function sessionGet($key, $sub_key = null){
		if(isset($sub_key) && !empty($sub_key)){
			if(isset($_SESSION) && !empty($_SESSION)){
				if(isset($_SESSION[$key]) && !empty($_SESSION[$key])){
					if(isset($_SESSION[$key][$sub_key]) && !empty($_SESSION[$key][$sub_key])){
						return $_SESSION[$key][$sub_key];
					}
					return "";
				}
				return "";
			}
			return "";
		}else{
			if(isset($_SESSION) && !empty($_SESSION)){
				if(isset($_SESSION[$key]) && !empty($_SESSION[$key])){
					return ($_SESSION[$key]);
				}
				return "";
			}
			return "";
		}
	}

	function sessionUnset($key){
		if(isset($_SESSION) && !empty($_SESSION)){
			if(isset($_SESSION[$key])){
				unset($_SESSION[$key]);
			}
		}
	}

	function getValueByKey($key){
		$conn = $GLOBALS["conn"];
		$sql = "SELECT * FROM settings WHERE s_key = '$key'";
		$result = mysqli_query($conn,$sql);
		$result = mysqli_fetch_assoc($result);
		return $result["s_value"];
	}

	function setValueByKey($key, $value=null){
		$conn = $GLOBALS["conn"];
		if(!getValueByKey($key)){
			$sql = "INSERT INTO settings (s_key,s_value) VALUES ('$key','$value')";
			mysqli_query($conn,$sql);
		}else{
			$sql = "UPDATE settings SET s_value = '$value' WHERE s_key = '$key'";
			mysqli_query($conn,$sql);
		}
	}


?>