<?php

//login methood
function login($user, $pass){
	global $con;
	$sql  = "SELECT * FROM LoginDetails WHERE username = '$user'";
	$response;
	if (!mysqli_query($con,$sql)){
		$response = FALSE;
	}else{
		$result = mysqli_fetch_array(mysqli_query($con,$sql));
		
		if($result['password'] == $pass){
			$response = TRUE;
			
		} else{
			$response = FALSE;
		}
	}
	return $response;
}
function addLogin($user, $pass){
	global $con;
	$response;
	$sql = "INSERT INTO LoginDetails(username , password) VALUES('$user', '$pass');";
	if (mysqli_query($con, $sql) == TRUE) {
		 $myemail = "yoyoambition@gmail.com" ;
	 	 $subject = "Sign Up yoyoambiton" ;
	  	$message = "Good Day to you. It seems that you have signed up for Yoyoambition.com .";
		require 'email.php';
		sendEmail($user,$myemail,$subject,$message);
		
		$response = TRUE;
	}else{
		die('Error: ' . mysqli_error($con));
		
		$response = FALSE;
	}
	return $response;
					
}
//update person
function updateLogin($user,$pass){
	global $con;
	$response;
	$sql = "UPDATE LoginDetails set  password = '$pass' where username='$user');";
	if (mysqli_query($con, $sql) == TRUE) {
		$response = TRUE;
	}else{
		$response = FALSE;
	}
	return $response;
	
	
}

function removeLogin($user){
	global $con;
	$respose;	
	$sql  = "DELETE FROM LoginDetails where username = '$user'";
	if (!mysqli_query($con,$sql)){
		die('Error: ' . mysqli_error($con));
		$response = null;
	} else {
		$result = mysqli_fetch_array(mysqli_query($con,$sql));
		$response = $result;
	}
	return $response;	
}


//password z 









?>