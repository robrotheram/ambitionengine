//method to reset users password
<?php

function sendreset($email){
	$response;
	$code = substr(str_shuffle( "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" ), 0, 1).substr( md5( time() ), 1);
	$sql = "INSERT INTO forogt SET username = '$email', code = '$code';";	 
	if (mysqli_query($con, $sql) == TRUE) {
		$response = TRUE;
		//send email
	  $myemail = "yoyoambition@gmail.com" ;
	  $subject = "Reset Password for yoyoambiton" ;
	  $message = "Good Day to you. It seems that you have forgotten your password. Enter the code '.$code.' to http://yoyoambition.com/forgot. If you are a hacker please don't take advantage of this user play nice.";
	  require 'email.php';
	  sendEmail($email,$myemail,$subject,$message);
	}else{
		die('Error: ' . mysqli_error($con));
		$response = FALSE;
	}	
	return $response;
}
function reset($code,$email){
	
	$sql  = "SELECT * FROM forgot WHERE username = '$email'";
	$response;
	if (!mysqli_query($con,$sql)){
		$response = FALSE;
	}else{
		$result = mysqli_fetch_array(mysqli_query($con,$sql));
		if($result['code'] == $code){
			$response = TRUE;
		} else{
			$response = FALSE;
		}
	}
}



?>