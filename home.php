<? session_start();	
	$userid =  $_SESSION['userid'] ;
	if($userid == NULL){ require 'denied.php';}else{ ?>
    
    <center><h1>Welcome: <? echo $userid;?></h1></center>
    
    
    
    <? }?>
 
	