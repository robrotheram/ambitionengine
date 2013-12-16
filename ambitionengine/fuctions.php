<?php
	require('settings.php');
	require('db_connect.php');
	
function MSQL_login($user, $pasword,$next){
	require('login.php');
	if(login($user, $pasword)==TRUE){
		
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

function MYSQL_resetPassword($email){
	require('reset.php');
	if(sendreset($email)){
		header('Location: ../?page=forgot&message=sucess');	
	}
}

function MYSQL_isResetCodeCorrect($code){
	require('reset.php');
	return resetfind($code);
}

function MYSQL_resetUsersPassword($user,$pass){
	require 'login.php';
	if(updateLogin($user,$pass) ==TURE){
		header('Location: ../page.php?p=reset&success=yes');	
	} else{
		header('Location: ../index.html');	
	}
}
?>