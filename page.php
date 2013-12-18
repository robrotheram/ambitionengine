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
	
	
	
}
 require_once('footer.php');


