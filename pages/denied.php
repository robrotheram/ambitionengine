<?php
$message = $_GET['mssg'];
if($message==null){
	$message = ' I am sorry but the page you are trying to access is not avalible to you. <br>
		    Have you trired to log in?<br>';
}
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
<div class="container white">
	<div class="row">
		<div class="col-lg-2">
	    	<img class="img-rounded img-thumbnail" src="img/denided.png" alt="...">
		</div>
  		<div class="col-lg-10 textlarge">
		    <h3>Access Denied</h3>
		 	Message: <? echo $message;?>
		    <br>
		    <div class="row">
		    	<a href="index.html?page=login" class="btn btn-success col-lg-6" >login</a><a href="index.html?page=signup" class="btn btn-warning col-lg-6">Sign up</a>
			</div>
		</div>
</div>
<hr>

</div>
