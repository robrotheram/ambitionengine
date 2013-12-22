<?php

	$type = $_POST['content_type'];
	$request = $_POST['request_type'];
	
	if($type == "JSON"){
		require('json.php');
		switch ($request) {
		    case "LOGIN":
		        JSON_login($_POST['username'], $_POST['password']);
		        break;
			case "SEARCH":
				JSON_Search($_POST['keyword'], $_POST['search']);
				break;
			
		}
		
	}else{
		require('fuctions.php');
		switch ($request) {
		    case "LOGIN":
		        MSQL_login($_POST['username'], $_POST['password'],$_POST['nexturl']);
		        break;
			case "REGISTER":
				MSQL_register($_POST['registerUsername'], $_POST['registerPassword'],$_POST['nexturl']);
				break;
			case "RESET":
				MYSQL_resetPassword($_POST['email']);
				break;
			case "RESETPASSWORD":
				 MYSQL_resetUsersPassword($_POST['registerUsername'], $_POST['registerPassword']);
				break;
			case "SEARCH":
				 MYSQL_Search($_POST['keyword'], $_POST['search']);
				break;
			case "UPDATEUSER":
				 MYSQL_updateUser($_POST['username'],$_POST['firstname'],$_POST['lName'],$_POST['dob'],$_POST['gender'],$_POST['ocupation'],$_POST['location'],$_POST['about'],$_POST['hobbies'],$_POST['registerPassword']);
				break;
			case "ADDFAV":
				 MYSQL_addFav($_POST['username'],$_POST['jobName'],$_POST['jobURL']);
				break;
			case "ADDRECENT":
				MYSQL_addRecent($_POST['username'],$_POST['jobName'],$_POST['jobURL']);
				break;
			case "DELETEFAV":
				MYSQL_deletFav($_POST['favid']);
				break;
			case "ADDORG":
				 MYSQL_addorg($_POST['username'],$_POST['registerPassword'], $_POST['CompanyName'], $_POST['CompanyNum'], $_POST['CompanyCont'], $_POST['sector'], $_POST['size'],  $_POST['location'], $_POST['bannarimg'], $_POST['terms'], $_POST['url']);
				break;
			case "ADDPOST":
				 MYSQL_addPost($_POST['username'],$_POST['title'], $_POST['content'], $_POST['terms']);
				break;
			case "ADDREPLY":
				 MYSQL_addReply($_POST['id'],$_POST['content'], $_POST['username']);
				break;
			case "UPDATERANK":
				MYSQL_updateRank($_POST['id'],$_POST['rank'],$_POST['page']);
				break;
			case "ADDJOB":
				MYSQL_addJob($_POST['id'],$_POST['title'],$_POST['salery'],$_POST['dec'],$_POST['terms']);
				break;
		}
	}




?>


