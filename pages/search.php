<? 
	require 'ambitionengine/fuctions.php';
	$results =   MYSQL_search($_POST['keyword'],'');
	$length =  count ($results->jobs);
	
		
		?>
		

    <div class="container white">

        <ul class="nav nav-tabs " id='tabs'>
            <li><a class="text-muted" href="#search" data-toggle="tab"><span class="glyphicon glyphicon-search"></span>Results</a>

            </li>
            <li><a class="text-muted" href="#resource" data-toggle="tab" onclick="mapclick();"><span class="glyphicon glyphicon-map-marker"></span>
                Map</a>
            </li>
        </ul>
  
	<div class='tab-content'>
	    <div class='tab-pane fade in active' id='search'>
	      

<div class="row" style="margin-top: 16px;">

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="height:450px; overflow:auto;">
     <h2>Jobs</h2>
		<table class="table" style="width:100%">
			<tr>
				<th>Job Name</th>
				<th>Location</th>
			</tr>
			<?for ($i = 0; $i < $length; $i++) {
				$title = $results->jobs[$i]->title;
				$loc = $results->jobs[$i]->locations;
				$salery =$results->jobs[$i]->salary;
				$company = $results->jobs[$i]->company;
				$des  = $results->jobs[$i]->description;
			?>


		<tr>
			 <td><a href="page.php?p=display&title=<? echo $title;?>&location=<? echo $loc;?>&company=<? echo $company;?>&salery=<? echo $salery; ?>&desc=<? echo $des; ?> "><? echo $title?></a></td>
   			<td><? echo $loc;?></td>
		</tr>
		<? }?>
		</table>
    </div>
  </div>
  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="height:450px; overflow:auto;">
    	<h2>Cources</h2>
		<table class="table" style="width:100%">
		<tr>
			<td colspan="2"> Comming Soon</td>
		</tr>
		</table>
    </div>
  </div>


 <div class="col-sm-6 col-md-4">
     <div class="thumbnail" style="height:450px; overflow:auto;">
    	<h2>Voluntering</h2>
		<table class="table" style="width:100%">
		<tr>
			<td colspan="2"> Comming Soon</td>
		</tr>
		</table>
    </div>
  </div>


    </div>
    
   <hr>
   <div class="row">

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
   <h2>Internships</h2>
		<table class="table" style="width:100%">
		<tr>
			<td colspan="2"> Comming Soon</td>
		</tr>
		</table>

    </div>
  </div>
  
  
 <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    	<h2>Groups</h2>
		<table class="table" style="width:100%">
		<tr>
			<td colspan="2"> Comming Soon</td>
		</tr>
		</table>
    </div>
  </div>


 <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    	<h2>Alumni</h2>
		<table class="table" style="width:100%">
		<tr>
			<td colspan="2"> Comming Soon</td>
		</tr>
		</table>
    </div>
  </div>

    </div>




	    </div>
	    <div class='tab-pane' id='resource'>
	       <div class="row">
	       		  <div id="map" class="col-lg-12 map"></div>
	       			
	       			
	       		</div>
	       		
	       		<script type="text/javascript">
	       		function mapclick() {
	       	    setTimeout(function(){
	       			
					 // Define your locations: HTML content for the info window, latitude, longitude
    var locations = [
    <?
	for ($i = 0; $i < $length; $i++) {
		$url = "http://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($results->jobs[$i]->locations)."&sensor=true";
		$json = json_decode(file_get_contents($url));
		echo "['<p>".$results->jobs[$i]->title."</p>',".$json->results[0]->geometry->location->lat.",".$json->results[0]->geometry->location->lng."],".PHP_EOL;
		sleep ( 0.5 );
		}	
    
    ?>
      
    ];
    
    // Setup the different icons and shadows
    var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';
    
    var icons = [
    
     <?
	for ($i = 0; $i < $length; $i++) {?>
      iconURLPrefix + 'red-dot.png',
      <? }?>
    ]
    var icons_length = icons.length;
    
    
    var shadow = {
      anchor: new google.maps.Point(15,33),
      url: iconURLPrefix + 'msmarker.shadow.png'
    };

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 7,
      center: new google.maps.LatLng(52.5,-1.5),
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
    }},250);
 }

    

    function AutoCenter() {
      //  Create a new viewpoint bound
      var bounds = new google.maps.LatLngBounds();
      //  Go through each...
      $.each(markers, function (index, marker) {
        bounds.extend(marker.position);
      });
      //  Fit these bounds to the map
      map.fitBounds(bounds);
      map.zoom(7);
    }
   // AutoCenter();
  </script> 
	       	
	       	
	       </div>
	    </div>
	    
	    </div>
	    </div>
	 
   