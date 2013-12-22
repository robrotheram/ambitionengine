<?php


	function addorg($user, $name, $regnumber, $contact, $sector, $size, $location, $bannarimg, $terms, $url){
		global $con;
		$sql = "INSERT INTO OrgCharity SET 	username = '$user', 
											name = '$name',
											regnumber = '$regnumber',
											contact ='$contact',
											sector = '$sector',
											size = '$size',
											location = '$location',
											bannarimg = '$bannarimg',
											terms = '$terms',
											url = '$url';";
											
		
		$response;
		if (!mysqli_query($con,$sql)){
			die('Error: ' . mysqli_error($con));
			$response = FALSE;
		}else{
			$response = TRUE;
		}
		
		return $response;
	}
	
	function getOrg($user){
		
		global $con;
		$sql  = "SELECT * FROM OrgCharity WHERE username = '$user'";
		$response;
		if (!mysqli_query($con,$sql)){
			die('Error: ' . mysqli_error($con));
			$response = FALSE;
		}else{
			$response = mysqli_query($con,$sql);
			
		}
		return $response;
	}
	
	function getAllJOBS(){
		
		global $con;
		$sql  = "SELECT * FROM jobs";
		$response;
		if (!mysqli_query($con,$sql)){
			die('Error: ' . mysqli_error($con));
			$response = FALSE;
		}else{
			$response = mysqli_query($con,$sql);
			
		}
		return $response;
	}
	
	function getAllOrg(){
		
		global $con;
		$sql  = "SELECT * FROM OrgCharity";
		$response;
		if (!mysqli_query($con,$sql)){
			die('Error: ' . mysqli_error($con));
			$response = FALSE;
		}else{
			$response = mysqli_query($con,$sql);
			
		}
		return $response;
	}
	
	
	function addJob($id,$title,$salery,$des,$terms){
				global $con;
		 $sql = "INSERT INTO jobs (orgid, jobtitle, salery, description, terms) VALUES('$id', '$title', '$salery', '$des','$terms');";
	
			$response;
			if (!mysqli_query($con,$sql)){
				die('Error: ' . mysqli_error($con));
				$response = FALSE;
			}else{
				$response = TRUE;
			}
			return $response;
			
		
	}
	




?>