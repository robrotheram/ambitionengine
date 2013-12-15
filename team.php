<?php
require('ambitionengine/fuctions.php');
$reult = MYSQL_getTeam();
while($r = mysqli_fetch_array($reult)) {
	echo $r['name']." | ".$r['fbid']."<br/>";
}
?>