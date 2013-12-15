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
	
}
 require_once('pages/footer.php');


