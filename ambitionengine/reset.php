<?php

function sendreset($email){
	$response;
	global $con;
	$code = substr(str_shuffle( "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" ), 0, 1).substr( md5( time() ), 1);
	$sql = "INSERT INTO forogt SET username = '$email', code = '$code';";	 
	if (mysqli_query($con, $sql) == TRUE) {
		$response = TRUE;
		//send email
	  $myemail = "yoyoambition@gmail.com" ;
	  $subject = "Reset Password for yoyoambiton" ;
	  $message = "Good Day to you. It seems that you have forgotten your password. Enter go to http://yoyoambition.com/beta/page.php?p=reset&code=$code If you are a hacker please don't take advantage of this user play nice.";
	  require 'email.php';
	  sendEmail($email,$myemail,$subject,$message);
	}else{
		die('Error: ' . mysqli_error($con));
		$response = FALSE;
	}	
	return $response;
}
function resetfind($code){
	global $con;
	$sql  = "SELECT * FROM forogt WHERE code = '$code'";
	$response;
	if (!mysqli_query($con,$sql)){
		die('Error: ' . mysqli_error($con));
		$response = FALSE;
	}else{
		$result = mysqli_fetch_array(mysqli_query($con,$sql));
		if($result['code'] == $code){
			$sql  = "DELETE FROM forogt WHERE code = '$code'";
			if (!mysqli_query($con,$sql)){
				die('Error: ' . mysqli_error($con));
				$response = FALSE;
			}else{
				$response = TRUE;
			}
			
		} else{
			$response = FALSE;
		}
	}
	return $response;
}



?>