<?php
	
	
	
	
	
	function getAllMentions(){
	//include file to connect to the database

		include ('settings.php');
		include('db_connect.php');
		//final response array
		$response = array();
		
		//select mentors through flag
		$sql  = "SELECT * FROM UserProfile WHERE flag = 1";
		
		//test sql connection
		if (!mysqli_query($con,$sql)){
			$response["success"] = 0;
			$response["message"] = "Database Error";
		} else {
			$result = mysqli_query($con,$sql);
			$temp  = array();
			while($mentor = mysqli_fetch_array($result)) {
				//var_dump($mentor);
				//echo "</br>";
				//echo $mentor["username"]."</br>";
				//if($mentor->location == $location){
					$item = array();
					$item["username"] = $mentor["username"];
					$item["forename"] = $mentor["forename"];
					$item["surname"] = $mentor["surname"];
					$item["location"] = $mentor["location"];
					$item["gender"] = $mentor["gender"];
					$item["success"] = $mentor["success"];
					$item["about"] = $mentor["about"];
					$item["social"] = $mentor["social"];
					$item["work"] = $mentor["work"];
					$item["diss"] = $mentor["diss"];
					array_push($temp, $item);
				//}
			}
		
			$response["success"] = 1;
			$response["mentors"] = $temp;
		
			return $response;
		}
	}
		
?>