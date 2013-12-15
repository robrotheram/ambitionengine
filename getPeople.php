<?php
	
	function getpeopletable()
	{
		global $con;
		$sql  = "SELECT * from People";
		$response;
		if (!mysqli_query($con,$sql)){
			$response = FALSE;
			die('Error: ' . mysqli_error($con));
		}else{
			$response  = mysqli_query($con,$sql);
		}
		return $response;
	}
?>