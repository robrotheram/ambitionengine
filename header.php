<? session_start();	?>
<!DOCTYPE html>
<html>
  <head>
    <title>Yoyo Ambition</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/galaxy.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
  
<link href='http://fonts.googleapis.com/css?family=Coming+Soon' rel='stylesheet' type='text/css'>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.10.1.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    
    
        <script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/sha3.js"></script>
<script type="text/javascript">
var check = new Boolean();
function message() {
	alert("I am sorry this feature has not been implemented yet but we are on the case");
}
function toggleStyle() {
	 var hash = CryptoJS.SHA3(document.forms["login"]["password"].value, { outputLength: 512 });
     document.forms["login"]["password"].value = hash;
		
}

function encrypt() {
	var passLngth = document.getElementById("registerPassword").value.length;
	if(passLngth >6 ){
	 var hash = CryptoJS.SHA3(document.forms["email"]["registerPassword"].value, { outputLength: 512 });
     	document.forms["email"]["registerPassword"].value = hash;
		return true;
	}
		
}

function validateForm(){
	if(window.check){
		var hash = CryptoJS.SHA3(document.forms["registerUser"]["registerPassword"].value, { outputLength: 512 });
     	document.forms["registerUser"]["registerPassword"].value = hash;
		return true;
	}else{
		alert("Please Check what you have entered");
    	return false;
	}
}

function validateEmail(){
	var emails = document.getElementById("emailFrom").value.length;
	var subjects = document.getElementById("subject").value.length;
	var messages = document.getElementById("textarea").value.length;
	if(emails == 0 || subjects == 0 || messages== 0){
		alert("Please make sure you enterted text correctly value: ");
		return false;
	}else{
		return true;
	}
}

document.getElementById('registerUser').onsubmit = function() {
	alert(window.check);
	if (window.check){
	
	 return true;
	}else{
		alert("Error Check what you have entered");
		return false;

	}
}

function validation(){
	var pass = document.getElementById("registerPassword").value;
	var passlength = document.getElementById("registerPassword").value.length;
	var pass2 = document.getElementById("inputPassword2").value;
	
	if (pass != pass2 ){
		document.getElementById("passwordinput").className = "col-sm-6 has-error";
		document.getElementById("passcheck").className = "col-sm-6 has-error";
		document.getElementById("message1").className = "help-block";
		document.getElementById("message3").className = "help-block";
		check = false;
	} else{
		document.getElementById("passwordinput").className = "col-sm-6";
		document.getElementById("passcheck").className = "col-sm-6";
		document.getElementById("message1").className = "help-block displaynone";
		document.getElementById("message3").className = "help-block displaynone";
		check = true;
	}
	
	if (passlength < 7 ){
		document.getElementById("passwordinput").className = "col-sm-6 has-error";
		document.getElementById("message2").className = "help-block";
		check = false;
	} else{
		document.getElementById("passwordinput").className = "col-sm-6";
		document.getElementById("message2").className = "help-block displaynone";
		check = true;
	}
	
	
	
	
}

function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

function myFunction()
{
	var second = getUrlVars()["page"];
	var messagesent = getUrlVars()["message"];
	
	if(second =='contact'){
		$('#carousel-example-captions').carousel(3);
	}else if(second =='signup'){
		$('#carousel-example-captions').carousel(2);
	}else if(second =='login'){
		$('#carousel-example-captions').carousel(1);
	}else if(second =='forgot'){
		$('#carousel-example-captions').carousel(4);
	}
	
	if(messagesent == 'sucess'){
		document.getElementById("message4").className = "help-block";
	}
	
	
}
</script>


  </head>
  <body>
<div id="wrap">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header" style="padding-left:30px;">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html" data-target="#carousel-example-captions" data-slide-to="0">YOYO</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
       	<li><a href="src/check.php" data-target="#carousel-example-captions" data-slide-to="1">Account</a></li>
      	<li><a href="index.html?page=contact" data-target="#carousel-example-captions" data-slide-to="3">Conctact</a></li>
        <li><a href="page.php?p=about">About</a></li>
        <? if($_SESSION['userid'] !=NULL){?>
        	<li><a href="src/logout.php">Log out</a></li>
        <? }?>
      
    </ul>
   <form class="navbar-form navbar-left" role="search"role="form" action="page.php?p=search" method="post" >
      <div class="form-group">
        <input type="text" class="form-control" name="keyword" style="width: 100%" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
     <ul class="nav navbar-nav navbar-right" style="padding-right:30px;">
     <li><a href="http://facebook.com/robrotheram" >Facebook</a> </li>
     <li><a href="http://twitter.com/robrotheram" >Twitter</a></li>
     <li><a href="http://gplus.to/robrotheram" > Google+</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>