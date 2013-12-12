<?php
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
?>