<?php
require 'ambitionengine/fuctions.php';
$results =   MYSQL_search('test','');
$length =  count ($results->jobs);
for ($i = 0; $i < $length; $i++) {
$url = "http://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($results->jobs[$i]->locations)."&sensor=true";
echo "<a href='$url'>url</a>";
$json = json_decode(file_get_contents($url));
echo $json->results[];
echo "<br><hr><br>";
sleep ( 0.5 );
}	

?>





<!DOCTYPE html>
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <title>Google Maps Multiple Markers</title> 
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.10.1.min.js"></script>
</head> 
<body>

</body>
</html>
