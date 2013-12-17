<?php

	function newUser($email){
		global $con;
		$response;
		$sql = "INSERT INTO UserProfile (username) VALUES('$email');";
		if (mysqli_query($con, $sql) == TRUE) {
			 
			$response = TRUE;
		}else{
			die('Error: ' . mysqli_error($con));
			
			$response = FALSE;
		}
		return $response;
	}
	
	function getUser($username){
		global $con;
		$sql  = "SELECT * FROM UserProfile WHERE username = '$username'";
		if (mysqli_query($con, $sql) == TRUE) {
				return mysqli_query($con, $sql);
		}else{
			die('Error: ' . mysqli_error($con));
			return NULL;
		}
	}
	
	
	
	function updateUser($user,$ufname,$usname,$udob,$gender,$occp,$loc,$about,$hobbies){
			
		global $con;
		$response;
		
	global $con;
		$response;
		
		if((isset($ufname))&&($ufname!='')){
			$sql = "UPDATE UserProfile SET forename = '$ufname' WHERE username='$user';";
			if (mysqli_query($con, $sql) == TRUE) {
				$response = TRUE;
			}else{
				die('Error: ' . mysqli_error($con));
				
				$response = FALSE;
			}
		}
		if(isset($usname)&&($usname!='')){
			$sql = "UPDATE UserProfile SET surname = '$usname' WHERE username='$user';";
			if (mysqli_query($con, $sql) == TRUE) {
				$response = TRUE;
			}else{
				die('Error: ' . mysqli_error($con));
				
				$response = FALSE;
			}
		}
		if(isset($udob)&&($udob!='')){
			$sql = "UPDATE UserProfile SET dob = '$udob' WHERE username='$user';";
			if (mysqli_query($con, $sql) == TRUE) {
				$response = TRUE;
			}else{
				die('Error: ' . mysqli_error($con));
				
				$response = FALSE;
			}
		}
		if(isset($gender)&&($gender!='')){
			$sql = "UPDATE UserProfile SET gender = '$gender' WHERE username='$user';";
			if (mysqli_query($con, $sql) == TRUE) {
				$response = TRUE;
			}else{
				die('Error: ' . mysqli_error($con));
				
				$response = FALSE;
			}
		}
		if(isset($occp)&&($occp!='')){
			$sql = "UPDATE UserProfile SET ocupation  = '$occp' WHERE username='$user';";
			if (mysqli_query($con, $sql) == TRUE) {
				$response = TRUE;
			}else{
				die('Error: ' . mysqli_error($con));
				
				$response = FALSE;
			}
		}
		if(isset($loc)&&($loc!='')){
			$sql = "UPDATE UserProfile SET location  = '$loc' WHERE username='$user';";
			if (mysqli_query($con, $sql) == TRUE) {
				$response = TRUE;
			}else{
				die('Error: ' . mysqli_error($con));
				
				$response = FALSE;
			}
		}
		if(isset($about)&&($about!='')){
			$sql = "UPDATE UserProfile SET about  = '$about' WHERE username='$user';";
			if (mysqli_query($con, $sql) == TRUE) {
				$response = TRUE;
			}else{
				die('Error: ' . mysqli_error($con));
				
				$response = FALSE;
			}
		}
		
		if(isset($hobbies)&&($hobbies!='')){
			$sql = "UPDATE UserProfile SET hobbies  = '$hobbies' WHERE username='$user';";
			if (mysqli_query($con, $sql) == TRUE) {
				$response = TRUE;
			}else{
				die('Error: ' . mysqli_error($con));
				
				$response = FALSE;
			}
		}
		
		return $response;
		
	}
	
	



?>