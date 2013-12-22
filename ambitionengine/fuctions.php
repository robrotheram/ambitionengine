<?php
	require_once('settings.php');
	require_once('db_connect.php');
	
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
	require('personinfo.php');
	
	if((addLogin($user, $pass, 0)==TRUE)&&newUser($user)){
		
		session_start();	
		$_SESSION['userid'] = $user;
		header('Location:'.$next);
	}else{
		header('Location: fail.php');
	}
	
}

function MYSQL_getUserType ($username){
	require('login.php');
	return getUserType($username);
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

function MYSQL_search($key,$loc){
		require 'aggregate_search.php';
		return json_decode(search($key,$loc));
	}

function MYSQL_updateUser($user,$fname,$sname,$dob,$gender,$occp,$loc,$about,$hobbies,$pass){
		require('personinfo.php');
		
		if(isset($pass)&&($pass != '')){
			require 'login.php';
			updateLogin($user,$pass);
		}
		
		if(updateUser($user,$fname,$sname,$dob,$gender,$occp,$loc,$about,$hobbies) ==TRUE){
			header('Location: ../page.php?p=home');	
		} else {
			header('Location: ../page.php?p=home');
		}
	}
function MYSQL_getUser($user){
	require_once('personinfo.php');
	return getUser($user);
}

function MYSQL_addFav($username,$jobName,$jobURL){
	require_once 'fav.php';
	addFavourite($username,$jobName,$jobURL);
	header('Location: ../'.$jobURL);
	
}


function MYSQL_addRecent($username,$jobName,$jobURL){
	require_once 'resent.php';
	addresent($username,$jobName,$jobURL);

}


function MYSQL_getRecent($user){
	require_once 'resent.php';
	return getresent($user);
}


function MYSQL_getFav($user){
	require_once 'fav.php';
	return  getFav($user);
}

function MYSQL_deletFav($id){
	require_once 'fav.php';
	 deleteFav($id);
	 header('Location: ../page.php?p=home');
}

function MYSQL_hasFav($username, $jobname){
	require_once 'fav.php';
	return hasFav($username,$jobname);
}

function MYSQL_addorg($user, $pass, $name, $regnumber, $contact, $sector, $size, $location, $bannarimg, $terms, $url){
	require('login.php');	
	addLogin($user, $pass, 2);
	require_once 'orgsignup.php';
 	addorg($user, $name, $regnumber, $contact, $sector, $size, $location, $bannarimg, $terms, $url);
}

function MYSQL_getOrg($username){
	require_once 'orgsignup.php';
	return getOrg($username);
}


function MYSQL_getAllOrgs(){
	require_once 'orgsignup.php';
	return getAllOrg();
}


function MYSQL_addPost($user, $title, $content, $terms){
	require_once 'Forum.php';
	addPost($user, $title, $content, $terms);
}


function MYSQL_deletepost($id){
	require_once 'Forum.php';
	deletepost($id);
}

function MYSQL_getPostbyID($id){
	require_once 'Forum.php';
	return getPostbyID($id);
}
function MYSQL_getPostbyUsername($id){
	require_once 'Forum.php';
	return getPostbyUsername($id);
}
function MYSQL_getAllPost(){
	require_once 'Forum.php';
	return getAllPost();
}
function MYSQL_addReply($id,$content,$user){
	require_once 'Forum.php';
	return addReply($id,$content,$user);
}
function MYSQL_getReplys($id){
	require_once 'Forum.php';
	return getReplys($id);
}

	



?>