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
	$response;
	$sql = "INSERT INTO LoginDetails(username , password) VALUES('$un', '$pass');";
	if (mysqli_query($con, $sql) == TRUE) {
		$response = TRUE;
	}else{
		$response = FALSE;
	}
	return $response;
					
}
//update person
function updateLogin($user,$pass){
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