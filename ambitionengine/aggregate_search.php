<?php

	function search($keyword,$location){
		//set response array
		$response = array();
		
		//set up respective arrays
		$jobs_response = array();
		$education_response = array();
		$opportunities_response = array();
		$mentors_response = array();
		
		//get input fields
		$keyword = $_POST["keyword"];
		$location = $_POST["location"];
		
		//include relevant files for functions
		include("get_jobs.php");
		include("get_mentors.php");
		
		//get results from individual stream php files-------------------------------------------------------
		
		
		//get jobs
		$jobs_response = getJobs($keyword, $location);
		
		//get education
		
		
		
		//get opportunities and volunteering
		
		//get mentors
		$mentors_response = getAllMentions();
		
		//if successful, assign arrays, else warn user------------------------------------------------------
		if($jobs_response["success"] == 1 ){
			$response["jobs"] = $jobs_response["jobs"];
		}
		
		if($education_response["success"] == 1 ){
			
		}
		
		if($opportunities_response["success"] == 1){
			
		}
		
		if($mentors_response["success"] == 1 ){
			$response["mentors"] = $mentors_response["mentors"];
		} 

		return json_encode($response);
	}
?>