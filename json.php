<?php

function JSON_login($user, $pass){
	require('login.php');
	$response = array();
	if(login($user, $pass)==TRUE){
			
		$response["success"] = 1;
		$response["message"] = "You are now login.";
		session_start();	
		$_SESSION['userid'] = $user;
		
	}else{
		$response["success"] = 0;
		$response["message"] = "Login Error my be a wrong username and/or password cpmbination";
	}
	echo json_encode($response);	
}




?>