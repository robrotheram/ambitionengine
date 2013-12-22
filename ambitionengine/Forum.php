<?

function addPost($user, $title, $content, $terms){
	global $con;
		$sql = "INSERT INTO ForumPosts SET username = '$user', title = '$title', content = '$content', terms = '$terms', date = NOW();";	 
		$response;
		if (!mysqli_query($con,$sql)){
			die('Error: ' . mysqli_error($con));
			$response = FALSE;
		}else{
			$response = TRUE;
		}
		return $response;
}

function deletepost($id){
	global $con;
		$sql = "DELETE FROM ForumPosts where id = '$id';";	 
		$response;
		if (!mysqli_query($con,$sql)){
			die('Error: ' . mysqli_error($con));
			$response = FALSE;
		}else{
			$response = TRUE;
		}
		
	return $response;
}


function getAllPost(){
	global $con;
		$sql = "SELECT * FROM ForumPosts";	 
		$response;
		if (!mysqli_query($con,$sql)){
			die('Error: ' . mysqli_error($con));
			$response = null;
		}else{
			$response = mysqli_query($con,$sql);
		}
		
	return $response;
}


function getPostbyID($id){
	global $con;
		$sql = "SELECT * FROM ForumPosts where id = '$id';";	 
		$response;
		if (!mysqli_query($con,$sql)){
			die('Error: ' . mysqli_error($con));
			$response = null;
		}else{
			$response = mysqli_query($con,$sql);
		}
		
	return $response;
}

function getPostbyUsername($user){
	global $con;
		$sql = "SELECT * FROM ForumPosts where username = '$user';";	 
		$response;
		if (!mysqli_query($con,$sql)){
			die('Error: ' . mysqli_error($con));
			$response = null;
		}else{
			$response = mysqli_query($con,$sql);
		}
		
	return $response;
}
	function addReply($id,$content,$user){
		echo $id ."|".$content."|".$user;
		
		global $con;
		 $sql = "INSERT INTO ForumReplys (postid, username, content, rank, date) VALUES('$id', '$user', '$content', '0', NOW());";
	
			$response;
			if (!mysqli_query($con,$sql)){
				die('Error: ' . mysqli_error($con));
				$response = FALSE;
			}else{
				$response = TRUE;
			}
			return $response;
	}
	
	function getReplys($id){
		global $con;
		$sql = "SELECT * FROM ForumReplys where postid  = '$id';";	 
		$response;
		if (!mysqli_query($con,$sql)){
			die('Error: ' . mysqli_error($con));
			$response = null;
		}else{
			$response = mysqli_query($con,$sql);
		}
		
	return $response;
}
	
	function searchForum($keywords){
		global $con;
		$sql = "SELECT * FROM ForumPosts";	 
		$response;
		if (!mysqli_query($con,$sql)){
			die('Error: ' . mysqli_error($con));
			$response = null;
		}else{
			$careerjet_response = array();
			$results = mysqli_query($con,$sql);
		while($r = mysqli_fetch_array($results)){
			if (strpos($r['terms'],$keywords) !== false) {
				$item = array();
				$item["id"] = $r['id'] ;
				$item["title"] = $r['title'];
				$item["conctent"] = $r['content'];
				

					//push single job entry into the array
					array_push($careerjet_response, $item);
				
				
				
			}
		}
		$response = $careerjet_response;
		
		
	}
		return $response;
	}




?>