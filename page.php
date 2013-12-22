<?php
 require_once('header.php');
$page = $_GET['p'];
switch ($page)
{
	case "about":
   require_once('pages/about.php');
   break;
   case "home":
   require_once('pages/home.php');
   break;
   case "reset":
   require_once('pages/resetpassword.php');
   break;
   case "ft":
   require_once('pages/firstTime.php');
   break;
   case "search":
   require_once('pages/search.php');
   break;
   case "display":
	require_once 'pages/display.php';
	break;
   case "orgsign":
	   require_once 'pages/orgSignup.php';
	break;
	 case "forumpost":
	   require_once 'pages/fourmPosts.php';
	break;
	 case "addpost":
	   require_once 'pages/addpost.php';
	break;
	 case "addjob":
	   require_once 'pages/AddJob.php';
	break;
	case "error":
	   require_once 'pages/denied.php';
	break;
	
	
}
 require_once('footer.php');


