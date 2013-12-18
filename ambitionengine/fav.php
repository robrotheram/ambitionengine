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
	
	function hasFav($user,$jobname){
		global $con;
		$sql  = "SELECT * FROM favourite WHERE username = '$user'";
			 
		$id = NULL;
		if (!mysqli_query($con,$sql)){
			die('Error: ' . mysqli_error($con));
			
		}else{

			$reults = mysqli_query($con, $sql);
			while($r =  mysqli_fetch_array($reults)){
				if(trim($r['jobname']) == trim($jobname)){
					$id = $r['id'];
					break;
				}
			}

		}
		return $id;
	}
	
	
	function getFav($user){
		
		global $con;
		$sql  = "SELECT * FROM favourite WHERE username = '$user' ORDER BY id DESC LIMIT 15";
		if (mysqli_query($con, $sql) == TRUE) {
				return mysqli_query($con, $sql);
		}else{
			die('Error: ' . mysqli_error($con));
			return NULL;
		}
	}
	
	function deleteFav($id){
		global $con;
		$sql = "DELETE FROM favourite WHERE id = '$id'";
		$response;
		if (!mysqli_query($con,$sql)){
			die('Error: ' . mysqli_error($con));
			$response = FALSE;
		}else{
			$response = TRUE;
		}
	}
	
	
	
?>