<?php
	require('settings.php');
	require('db_connect.php');
	$type = $_POST['content_type'];
	$request = $_POST['request_type'];
	
	if($type == "JSON"){
		require('json.php');
		switch ($request) {
		    case "LOGIN":
		        JSON_login($_POST['username'], $_POST['password']);
		        break;
		}
		
	}else{
		require('fuctions.php');
		switch ($request) {
		    case "LOGIN":
		        MSQL_login($_POST['username'], $_POST['password'],$_POST['nexturl']);
		        break;
		}
	}




?>

