<?php
$dbhost = "localhost"; 
$dbuname = "root";  // Database username
$dbpass = "mallard";   // Database password
$dbname = "test";   // Database NAME

$con=mysqli_connect($dbhost,$dbuname,$dbpass,$dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>