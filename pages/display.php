<?php
$title = urldecode($_GET['title']);
$location  = urldecode($_GET['location']);
$comany  = urldecode($_GET['company']);
$salery  = urldecode($_GET['salery']);
$dec = urldecode($_GET['desc']);
	require 'ambitionengine/fuctions.php';

?>
<? $userid =  $_SESSION['userid'] ;
			if($userid != NULL){ ?>
 <script>
$( document ).ready(function() {
var title = "<? echo $title; ?>";


var users ="<? echo $userid; ?>";


var url = "<? echo 'page.php?p=display&title='.urlencode($title).'&location='.urlencode($location).'&company='. urlencode($comany).'&salery='.urlencode($salery).'&desc='.urlencode($dec); ?>";



$.post("ambitionengine/api.php",
    {
    	content_type :'OTHER',
		request_type : 'ADDRECENT',
    	username: users,
		jobName: title,
		jobURL:url
    },
    function(data,status){
      
    });




});
</script>
<? }?>

<div class="container white">
	
	<div class="row">
		<div class="col-lg-12"style="background-image:url('http://www.droid-life.com/wp-content/uploads/2013/01/googlenownewyork.png'); height: 300px; background-size: 100%;">
		</div>
	<div class="row">
		<div class="col-lg-2">
			<center>
				<img class="img-thumbnail img-rounded" src="img/job.png" style="width:128px; height:128px;"/>
			</center>
		</div>
		<div class="col-lg-10">
			<table class="table">
				<tr>
					<td>Job Title</td>
					<td><? echo $title;?></td>
				</tr>
				
				<tr>
					<td>Job Location</td>
					<td><? echo $location;?></td>
				</tr>	
				<tr>
					<td>Conpany</td>
					<td><? echo $comany;?></td>
				</tr>
				<tr>
					<td>Job Salery</td>
					<td><? echo $salery;?></td>
				</tr>
				<tr>
					<td>Job Decription</td>
					<td><? echo $dec;?></td>
				</tr>
			</table>
			
		
			<? $userid =  $_SESSION['userid'] ;
			if($userid != NULL){ ?>
			<div class="row">
				<div class="col-sm-6">
					<? 
					$jid = MYSQL_hasFav($userid,urlencode($title));
					if($jid != NULL){?>
						
						<form role="form" method="post" action="ambitionengine/api.php">
						<input type="hidden" name="content_type" value="OTHER">
					    <input type="hidden" name="request_type" value="DELETEFAV">
					    <input type="hidden" name="favid" value="<?echo $jid; ?>">
					    <button type="submit" class="btn btn-warning" style="width:100%;">Delete From your Fav</button>
					</form>
						
					<? } else{ ?>
					
					
					<form role="form" method="post" action="ambitionengine/api.php">
						<input type="hidden" name="content_type" value="OTHER">
					    <input type="hidden" name="request_type" value="ADDFAV">
					    <input type="hidden" name="username" value="<? echo $userid;?> ">
					    <input type="hidden" name="jobName" value="<? echo urlencode($title);  ?> ">
					    <input type="hidden" name="jobURL" value="<? echo 'page.php?p=display&title='.urlencode($title).'&location='.urlencode($location).'&company='. urlencode($comany).'&salery='.urlencode($salery).'&desc='.urlencode($dec); ?>">
						<button type="submit" class="btn btn-primary" style="width:100%;">Add to Favourite</button>
					</form>
					<? }?>
				</div>
				<div class="col-sm-6">
					<a href="https://twitter.com/intent/tweet?source=webclient&text=Found this cool job:<? echo $title;?> at @yoyoambition" class="btn btn-info" style="width:100%">Tweet</a>
				</div>
			</div>
			<? }?>
		</div>
	</div>
	<br>
	<hr>
	<div class="row">
		<h1> Map</h1>
		  <div id="map" class="col-lg-12 map"></div>

  <script type="text/javascript">
    // Define your locations: HTML content for the info window, latitude, longitude
    var locations = [
   <? 
   		$url = "http://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($location)."&sensor=true";
		$json = json_decode(file_get_contents($url));
		echo "['<p>".$title."</p>',".$json->results[0]->geometry->location->lat.",".$json->results[0]->geometry->location->lng."],".PHP_EOL;
		
	?>
    ];
    
    // Setup the different icons and shadows
    var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';
    
    var icons = [
      iconURLPrefix + 'red-dot.png',

    ]
    var icons_length = icons.length;
    
    
    var shadow = {
      anchor: new google.maps.Point(15,33),
      url: iconURLPrefix + 'msmarker.shadow.png'
    };

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(-37.92, 151.25),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: false,
      streetViewControl: false,
      panControl: false,
      zoomControlOptions: {
         position: google.maps.ControlPosition.LEFT_BOTTOM
      }
    });

    var infowindow = new google.maps.InfoWindow({
      maxWidth: 160
    });

    var marker;
    var markers = new Array();
    
    var iconCounter = 0;
    
    // Add the markers and infowindows to the map
    for (var i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon : icons[iconCounter],
        shadow: shadow
      });

      markers.push(marker);

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
      
      iconCounter++;
      // We only have a limited number of possible icon colors, so we may have to restart the counter
      if(iconCounter >= icons_length){
      	iconCounter = 0;
      }
    }

    function AutoCenter() {
      //  Create a new viewpoint bound
      var bounds = new google.maps.LatLngBounds();
      //  Go through each...
      $.each(markers, function (index, marker) {
        bounds.extend(marker.position);
      });
      //  Fit these bounds to the map
      map.setCenter(bounds.getCenter());
  	  map.setZoom(12);
    }
    AutoCenter();
  </script> 
		
	
	</div>
	       		
	       		

	       
	
	
	
</div>