<?php
	require('settings.php');
	require('db_connect.php');
	
function MSQL_login($user, $pass,$next){
	require('login.php');
	if(login($user, $pass)==TRUE){
		
		session_start();	
		$_SESSION['userid'] = $user;
		header('Location:'.$next);
	}else{
		header('Location: fail.php');
	}	
}
function MSQL_register($user, $pass,$next){
	require('login.php');
	
	if(addLogin($user, $pass)==TRUE){
		
		session_start();	
		$_SESSION['userid'] = $user;
		header('Location:'.$next);
	}else{
		header('Location: fail.php');
	}
	
}

function MYSQL_getTeam(){
	
	require('getPeople.php');
	return getpeopletable();
}
?>