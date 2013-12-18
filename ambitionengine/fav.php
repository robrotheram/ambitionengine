<?php
	function addFavourite($user,$jobname,$joburl)
	{
		global $con;
		$sql = "INSERT INTO favourite SET username = '$user', jobname = '$jobname', url = '$joburl', date = NOW();";	 
		$response;
		if (!mysqli_query($con,$sql)){
			die('Error: ' . mysqli_error($con));
			$response = FALSE;
		}else{
			$response = TRUE;
		}
	}
	
	function getFav($user){
		
		global $con;
		$sql  = "SELECT * FROM favourite WHERE username = '$user'";
		if (mysqli_query($con, $sql) == TRUE) {
				return mysqli_query($con, $sql);
		}else{
			die('Error: ' . mysqli_error($con));
			return NULL;
		}
	}
	
	
?>