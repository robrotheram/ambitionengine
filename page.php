<?php
 require_once('header.php');
$page = $_GET['p'];
switch ($page)
{
	case "about":
   require_once('about.php');
   break;
   case "home":
   require_once('home.php');
   break;
	
}
 require_once('footer.php');


