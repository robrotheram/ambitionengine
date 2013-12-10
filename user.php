<?php



//Add User to the database

function addUser($fn, $sn, $bd, $gn, $pc, $un, $pass){
		$response;
		$db = null;			 
		$sql = "INSERT INTO UserProfile(forename, surname, dob, gender, location, username) VALUES('$fn','$sn', '$bd','$gn','$pc','$un');";
		if (mysqli_query($con, $sql) == TRUE) {
			$sql = "INSERT INTO LoginDetails(username , password) VALUES('$un', '$pass');";
			if (mysqli_query($con, $sql) == TRUE) {
				$response = TRUE;
			}				
		} else {
			// failed to insert row
			die('Error: ' . mysqli_error($con));
			$response = FALSE;
		}
	return $response;
}

//Modify user 

function updateUser( $sp, $am, $we, $fn,$sn,$bd,$gn, $pc, $un, $pass){
	$response;
	$sql = "UPDATE UserProfile SET forename = '$fn',
	surname = '$sn',
	dob ='$bd',
	gender=''$gn',
	location='$pc',
	social='$sp',
	work='$we',
	about='$am' WHERE username  ='$us';";	 
	if (mysqli_query($con, $sql) == TRUE) {
		$response = TRUE;
	}else{
		die('Error: ' . mysqli_error($con));
		$response = FALSE;
	}
	return response;			
}

//GetUser

function getUser($user){
	$sql  = "Select * from UserProfile where username = '$user'";
	if (!mysqli_query($con,$sql)){
		die('Error: ' . mysqli_error($con));
		$response = null;
	} else {
		$result = mysqli_fetch_array(mysqli_query($con,$sql));
		$response = $result;
	}
	return $response;	
}

//remove user

function removeUser($user){
	$respose;	
	$sql  = "DELETE FROM UserProfile where username = '$user'";
	if (!mysqli_query($con,$sql)){
		die('Error: ' . mysqli_error($con));
		$response = null;
	} else {
		$result = mysqli_fetch_array(mysqli_query($con,$sql));
		$response = $result;
	}
	return $response;	
}







?>