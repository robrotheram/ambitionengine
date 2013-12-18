<?php
	function addresent($user,$jobname,$joburl)
	{
		global $con;
		$sql  = "SELECT * FROM recent WHERE username = '$user'";
			 
		$response;
		if (!mysqli_query($con,$sql)){
			die('Error: ' . mysqli_error($con));
			$response = FALSE;
		}else{
			$found = FALSE;
			$reults = mysqli_query($con, $sql);
			while($r =  mysqli_fetch_array($reults)){
				if($r['jobname']==$jobname){
					$found = TRUE;
				}
			}
			if($found == FALSE){
				$sql = "INSERT INTO recent SET username = '$user', jobname = '$jobname', url = '$joburl', date = NOW();";
				if (!mysqli_query($con,$sql)){
					die('Error: ' . mysqli_error($con));
					$response = FALSE;
				}else{
					$response = TRUE;
				}
			}
			
			
		}
		return $response;
	}
	
	function getresent($user){
		
		global $con;
		$sql  = "SELECT * FROM recent WHERE username = '$user' ORDER BY id DESC LIMIT 20";
		if (mysqli_query($con, $sql) == TRUE) {
				return mysqli_query($con, $sql);
		}else{
			die('Error: ' . mysqli_error($con));
			return NULL;
		}
	}
	
	
?>