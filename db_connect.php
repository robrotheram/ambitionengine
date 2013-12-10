<?php
	require_once('settings.php');

	//use mySQLi
	$con=mysqli_connect($dbhost,$dbuname,$dbpass,$dbname);
	
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} else {
	
	}
?>