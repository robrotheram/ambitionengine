<?php
require('ambitionengine/fuctions.php');
$reult = MYSQL_getTeam();
?>
  <div class="business-header">
    
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
                  <img class="media-object" style="margin:0 auto;" src="http://yoyoambition.com/beta/img/logo.png" alt="..." width="300" height="160">
                  <!-- The background image is set in the custom CSS -->
            <h2 class="tagline" style="color:#FFF; margin:0 auto; padding:10px; text-align:center;">Yoyoabmition is a small startup to help everyone young or old to get what they are passionate a reality</h2>
          <center>  <a href="index.html?page=signup" class="btn btn-warning btn-lg">Sign up</a></center> 
          </div>
        </div>
      
      </div>
    
    </div>
    


<div class="container">

<div class="row" style="padding-top:10px;">
	<div class="col-sm-6 col-md-4">
        <div class=""><center>
            <img class="img-thumbnail img-circle" src="img/award.png" alt="..." width="128" height="128">
            <div class="caption">
                <h2>Award Winning :p</h2>
            </div>
    	</div>
        </center>
  	</div>
    <div class="col-sm-6 col-md-4">
        <div class=""><center>
            <img class="img-thumbnail img-circle" src="img/tools.png" alt="..." width="128" height="128">
            <div class="caption">
                <h2>Custom Design :p</h2>
            </div>
    	</div>
        </center>
  	</div>
    <div class="col-sm-6 col-md-4">
        <div class=""><center>
            <img class="img-thumbnail img-circle" src="img/love.png" alt="..." width="128" height="128">
            <div class="caption">
                <h2>We love our users</h2>
            </div>
    	</div>
        </center>
  	</div>
</div>
<hr>
<div class="row">
	<div class="col-lg-12">
    <h1>Meet the team</h1>
    <?
	$x =1;
	while($r = mysqli_fetch_array($reult)) { if(($x%3)==0){?>
    <div class="row">
    <? } ?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img class="img-thumbnail img-rounded" src="https://graph.facebook.com/<? echo $r['fbid']; ?>/picture?width=200&height=200" alt="..." width="200" height="200">
      <div class="caption" style="height:250px;">
        <h2><? echo $r['name'];?></h2>
        <h3> Job Title: <? echo $r['job'];?></h3>
        <p> <? echo $r['bio']; ?></p>
      </div>
    </div>
  </div>
 <? if(($x%3)==0){?>
    </div>
   <? } ?>
	
	<? $x++; }
	?>

    
    
    </div>
</div>
<hr>

</div>


       
       

 
		   

	