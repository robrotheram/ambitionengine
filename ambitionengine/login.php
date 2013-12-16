<?php

//login methood
function login($user, $paswrd){
	global $con;
	$sql  = "SELECT * FROM LoginDetails WHERE username = '$user'";
	$response;
	if (!mysqli_query($con,$sql)){
		die('Error: ' . mysqli_error($con));
		$response = FALSE;
	}else{
		$result = mysqli_fetch_array(mysqli_query($con,$sql));
		$password =  hash("sha512",(hash('sha512', $paswrd).$result['salt'])); 
		if($result['password'] == $password){
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
	$paasword = hash("sha512", $pass);
	$salt = hash("sha512", time());
	$nwpass = hash("sha512",($paasword.$salt));
	$sql = "INSERT INTO LoginDetails(username , password, salt) VALUES('$user', '$nwpass','$salt');";
	
	
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
	$paasword = hash("sha512", $pass);
	$newsalt = hash("sha512", time());
	$newhash = hash("sha512",($paasword.$newsalt));
	
	$sql = "UPDATE LoginDetails SET salt='$newsalt', password='$newhash' WHERE username='$user';";
	if (mysqli_query($con, $sql) == TRUE) {
		$response = TRUE;
	}else{
		$response = FALSE;
		die('Error: ' . mysqli_error($con));
		
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