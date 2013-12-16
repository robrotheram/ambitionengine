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
		}
	}




?>


