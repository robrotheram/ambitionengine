<? 
 session_start();	
 $userid =  $_SESSION['userid'] ;
 if($userid == NULL){ header('Location: index.html?page=login');}else{header('Location: page.php?p=home');}  ?>