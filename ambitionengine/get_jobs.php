<?php

/*
	NOTE: CURRENTLY LIMITE TO 3 PAGES. CAN EDIT TO LIMITLESS SCROLLING LATER
*/

	function fromDB($keyword){
		require_once 'orgsignup.php';
		$results = getAllOrg();
		$careerjet_response = array();
		while($r = mysqli_fetch_array($results)){
			if (strpos($r['terms'],$keyword) !== false) {
				$item = array();
				$item["url"] = $r['url'] ;
				$item["title"] = $r['name'];
				$item["locations"] = $r['location'];
				$item["img"] = $r['bannarimg'];
				$item["type"] = "our_own" ;
				

					//push single job entry into the array
					array_push($careerjet_response, $item);
				
				
				
			}
		}
		return $careerjet_response;	

	}

	

	function getJobs ($keyword, $location){

		//page limit
		$page_limit = 3;
		
		//retrieve jobs from public API's
		$response = array();
		
		//Array for JSON response
		$careerjet_response = array();
		
		//currently using linkedin, careerjet
		
		//importing careerjet API
		require_once("Careerjet_API.php");
		
		//careerjet ----------------------------------------------------------------------------------
		
		//instantiate new careerjet api in english
		$cjapi = new Careerjet_API('en_GB');
			
		// Then call api methods (see methods doc for details)
		$result = $cjapi->search( array ( 'keywords' => $keyword,
										 'location' => $location) 
								);
			
		//check whether there are up to 3 pages
		if($result->pages < $page_limit){
			$page_limit = $result_pages;
		}
			
		for($page=1; $page<=$page_limit; $page++){
		
			$result = $cjapi->search( array ( 'keywords' => $keyword,
										 'location' => $location,
										'page' => $page) 
								);
			
			//get all JOBS for location passed in
			if ( $result->type == 'JOBS' ){
					
				$jobs = $result->jobs ;
						
				//make new array for jobs
				$careerjet_response = array();
				 
				//for each job
				foreach( $jobs as $job ){
					$item = array();
					$item["url"] = $job->url ;
					$item["title"] = $job->title ;
					$item["locations"] = $job->locations;
					$item["company"] = $job->company ;
					$item["salary"] = $job->salary ;
					$item["date"] = $job->date."" ;	
					$item["description"] = $job->description ;

					//push single job entry into the array
					array_push($careerjet_response, $item);
				}
			}
		}

		//collate results ---------------------------------------------------------------------
			
		$final_response = array();
			
		$final_response["success"] = 1;
				
		//join all datasets into the final response
		$response = array_merge(fromDB($keyword), $careerjet_response);
				
		//final array will be the merge of all arrays (change comments below later)
		$final_response["jobs"] = $response;
		//$final_response = array_merge((array) $response["careerjet"]);
			
		return $final_response;
	}
?>