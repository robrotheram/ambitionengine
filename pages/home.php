<? 
	$userid =  $_SESSION['userid'] ;
	if($userid == NULL){ require 'denied.php';}else{
	require 'ambitionengine/fuctions.php';
		
		
		
	$recent = MYSQL_getRecent($userid);
	$fav =  MYSQL_getFav($userid);
	$reults;
	$typeOfUser = mysqli_fetch_array(MYSQL_getUserType($userid));
	if($typeOfUser['type']==0){
		$reults =  mysqli_fetch_array(MYSQL_getUser($userid));
	} else{
		$reults =  mysqli_fetch_array(MYSQL_getOrg($userid));
	}
	
    $email = $userid;
	$default = "http://yoyoambition.com/beta/img/profile.png";
	$size = 128;
	$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;

	
		
		?>
    <div class="container white">

    <div class="row">

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img class="img-thumbnail img-rounded" src="<?php echo $grav_url; ?>" alt="..." width="128" height="128">
      <div class="caption" style="height:250px;">
      	<table class="table" style="width:100%">
      		<? if($typeOfUser == 0){ ?>
   					<tr>
   						<td>Name</td>
   						<td><? echo $reults['forename']." ".$reults['surname'];?></td>
   					</tr>
   					<tr>
   						<td>Occupation</td>
   						<td><? echo $reults['ocupation'];?></td>
   						
   					</tr>
   					<tr>
   						<td>Location</td>
   						<td><? echo $reults['location'];?></td>
   				<? }else{ ?>
   					<tr>
   						<td>Name</td>
   						<td><? echo $reults['name'];?></td>
   					</tr>
   					<tr>
   						<td>Registration Number</td>
   						<td><? echo $reults['regnumber'];?></td>
   						
   					</tr>
   					<tr>
   						<td>Location</td>
   						<td><? echo $reults['location'];?></td>
   				
   				<?}?>
					</table>
					<hr><br>
      	<a href="page.php?p=ft" class="btn btn-success" style="width: 100%">Change info</a>
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    	<h2>Your Recent Things you looked at</h2>
		<table class="table" style="width:100%">
		<?	while($r =  mysqli_fetch_array($recent)) {?>
		<tr>
			<td colspan="2" ><a href="<? echo $r['url'];?>"><? echo $r['jobname'];?></a></td>
			
			
		</tr>
		<?}?>
				</table>
    </div>
  </div>


 <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    	<h2>Your Favourites</h2>
		<table class="table" style="width:100%">
		<?	while($r =  mysqli_fetch_array($fav)) {?>
		<tr>
			<td ><a href="<? echo $r['url'];?>"><? echo urldecode($r['jobname']);?></a></td>
			<td>
				<form role="form" method="post" action="ambitionengine/api.php">
						<input type="hidden" name="content_type" value="OTHER">
					    <input type="hidden" name="request_type" value="DELETEFAV">
					    <input type="hidden" name="favid" value="<?echo $r['id'];?> ">
					    <button type="submit" class="btn btn-warning" style="width:100%;">Delete</button>
					</form>
				
				
		</tr>
		<?}?>
		</table>
    </div>
  </div>


    </div>
    
   <hr>
   <h1>Use full Information</h1>
   <div class="row">

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a class="twitter-timeline"  href="https://twitter.com/YoyoAmbition"  data-widget-id="412680108105674752">Tweets by @YoyoAmbition</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


    </div>
  </div>
  
  
 <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    	<h2>Recent Posts</h2>
		<table class="table" style="width:100%">
		<tr>
			<td colspan="2"> Comming Soon</td>
		</tr>
		</table>
    </div>
  </div>


 <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    	<h2>latest organisations</h2>
		<table class="table" style="width:100%">
		<tr>
			<td colspan="2"> Comming Soon</td>
		</tr>
		</table>
    </div>
  </div>

    </div>
    </div>
    
    <? }?>
 
	