<?php
	session_start();	
	$user = $_SESSION['userid'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>YoYo | Ambition</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Matt" >

    <!-- Le styles -->
    <link href="INC/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="INC/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="yoyoambition.css" rel="stylesheet">
    <link href="results.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
	
	<!-- Database Connect javascripts -->
  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
	</script>

	
  </head>

  <body>

      <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="index.php">YoYo</a>
          <div class="nav-collapse collapse pull-right">
              <ul class="nav">

                <li><a href="index.php">Home</a></li>
                <li class="dropdown">
                	<a class="dropdown-toggle" data-toggle="dropdown" href="#">
                		Notifications 
                		<b class="caret"></b>
                	</a>
                	<ul class="dropdown-menu">
                		<li class="nav-header"> Messages </li>
                		<li class="nav-header"> Opportunities </li>
                		<li class="nav-header"> Shares </li>
                	</ul>
                </li>

                <?php if($user ==null){?>
                	<li><a href="login.html">Login</a></li>
                <? }else{ ?> 
                	<li><a href="myprofile.php">Profile</a></li>
                <? } ?>	
                <li><a href="signup.html">Sign-Up</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
  </div>
   <div class="container">
   	<div class="container-fluid">
   		<div class="row-fluid">
   			<div class="sortable">
   				<div id="jobsBox" class="span4">
   					<h3><a class="resultTitle" href="extendedresults.html">Jobs</a></h3>
   					<?php $jdata = json_decode($_POST['json']);?>
   					<table class="table" style="width:100%">
   					<tr>
   						<td>Job Name</td>
   						<td>Location</td>
   					</tr>
   					<tr>
   						<td><? echo $jdata->jobs[0]->title;?></td>
   						<td><? echo $jdata->jobs[0]->locations;?></td>
   						
   					</tr>
   					<tr>
   						<td><? echo $jdata->jobs[1]->title;?></td>
   						<td><? echo $jdata->jobs[1]->locations;?></td>
   						
   					</tr>
   					<tr>
   						<td><? echo $jdata->jobs[2]->title;?></td>
   						<td><? echo $jdata->jobs[2]->locations;?></td>
   						
   					</tr>
   					<tr>
   						<td><? echo $jdata->jobs[3]->title;?></td>
   						<td><? echo $jdata->jobs[3]->locations;?></td>
   						
   					</tr>
					</table>
   				</div>
   				<div id="coursesBox" class="span4">
   					<h3><a class="resultTitle" href="extendedresults.html">Courses</a></h3>
						<ul>
						<!-- hard coded for demo -->
							<li class="courseResult">Course 1</li>
							<li class="courseResult">Course 2</li>
							<li class="courseResult">Course 3</li>   					
   					</ul>   				
   				</div>
   				<div id="volunteerBox" class="span4">
   					<h3><a class="resultTitle" href="extendedresults.html">Volunteering</a></h3>
   					<ul>
   					<!-- hard coded for demo -->
							<li class="volResult">Volunteer Position 1</li>
							<li class="volResult">Volunteer Position 2</li>
							<li class="volResult">Volunteer Position 3</li>   					
   					</ul>
   				</div>
   			</div>
   		</div>
   		<div class="row-fluid">
   			<div class="sortable">
   				<div id="internshipBox" class="span4">
   					<h3><a class="resultTitle" href="extendedresults.html">Internships</a></h3>
   					<ul>
   					<!-- hard coded for demo -->
							<li class="internResult">Internship 1</li>
							<li class="internResult">Internship 2</li>
							<li class="internResult">Internship 3</li>   					
   					</ul>
   				</div>
   				<div id="extraCurrBox" class="span4">
   					<h3><a class="resultTitle" href="extendedresults.html">Groups</a></h3>
						<ul>
						<!-- hard coded for demo -->
							<li class="extraCurrResult">ExtraCurricular 1</li>
							<li class="extraCurrResult">ExtraCurricular 2</li>
							<li class="extraCurrResult">ExtraCurricular 3</li>   					
   					</ul>   				
   				</div>
   				<div id="mentorBox" class="span4">
   					<h3><a class="resultTitle" href="extendedresults.html">Alumni</a></h3>
   					<!-- These should link to the alumi's user profile. -->
						<ul>
										
   					</ul>   				
   				</div>
   				<div id="otherBox" class="span4">
   					<ul>
   						<li class="otherResult">Other Activity 1</li>
   						<li class="otherResult">Other Activity 2</li>
   						<li class="otherResult">Other Activity 3</li>
   					</ul>
   				</div>
   			</div>
   		</div>
   	</div>
   	<div class="bannerbottom">
   		<center>
			<script type="text/javascript" src="http://www.reddit.com/static/button/button1.js"></script>
			<script src="https://platform.linkedin.com/in.js" type="text/javascript"></script>
			<script type="IN/Share" data-counter="right"></script>
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.yoyoambition.com">Tweet</a>
		</center>
	</div>
		<div class="bannerbottom">
    		<center>
			<script type="text/javascript" src="http://www.reddit.com/static/button/button1.js"></script>
			<script src="https://platform.linkedin.com/in.js" type="text/javascript"></script>
			<script type="IN/Share" data-counter="right"></script>
			<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.yoyoambition.com">Tweet</a>
			</center>
    	</div> 
	</div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="./jquery.js"></script>
    <script>
		
		$(document).ready(function() {
    		$( "#sortable,#sortable2" ).sortable({
        		connectWith: "#sortable,#sortable2"
   		});
    		$( "#sortable,#sortable2" ).disableSelection();
		});

    </script>
	<script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
		if(!d.getElementById(id)){js=d.createElement(s);
		js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
		fjs.parentNode.insertBefore(js,fjs);}}
		(document, 'script', 'twitter-wjs');
	</script>
	<script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
		if(!d.getElementById(id)){js=d.createElement(s);
		js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
		fjs.parentNode.insertBefore(js,fjs);}}
		(document, 'script', 'twitter-wjs');
	</script>
	
	  <script>
(function ($, window, delay) {
  // http://jsfiddle.net/AndreasPizsa/NzvKC/
  var theTimer = 0;
  var theElement = null;
    var theLastPosition = {x:0,y:0};
  $('[data-toggle]')
    .closest('li')
    .on('mouseenter', function (inEvent) {
    if (theElement) theElement.removeClass('open');
    window.clearTimeout(theTimer);
    theElement = $(this);

    theTimer = window.setTimeout(function () {
      theElement.addClass('open');
    }, delay);
  })
    .on('mousemove', function (inEvent) {
        if(Math.abs(theLastPosition.x - inEvent.ScreenX) > 4 || 
           Math.abs(theLastPosition.y - inEvent.ScreenY) > 4)
        {
            theLastPosition.x = inEvent.ScreenX;
            theLastPosition.y = inEvent.ScreenY;
            return;
        }
        
    if (theElement.hasClass('open')) return;
    window.clearTimeout(theTimer);
    theTimer = window.setTimeout(function () {
      theElement.addClass('open');
    }, delay);
  })
    .on('mouseleave', function (inEvent) {
    window.clearTimeout(theTimer);
    theElement = $(this);
    theTimer = window.setTimeout(function () {
      theElement.removeClass('open');
    }, delay);
  });
})(jQuery, window, 200); // 200 is the delay in milliseconds
</script>
  </body>
</html>