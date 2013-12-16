<? 
require('ambitionengine/fuctions.php');
$code = $_GET['code'];
if($_GET['code'] == NULL){
	$code = 'XXX';
}
$success = $_GET['success'];
echo $code;
$reult = MYSQL_isResetCodeCorrect($code);
if($reult){?>
		
		

		<div class="container centered" style="@media(max-width:767px){height:500px;}">   
			
		<form name="registerUser" id="registerUser"  class="form-horizontal" role="form" method="post" action="ambitionengine/api.php" onsubmit="return validateForm();">

		<fieldset>
		<div class="form-group">
	    <div class="col-sm-12">
	    <input type="hidden" name="content_type" value="OTHER">
	     <input type="hidden" name="request_type" value="RESETPASSWORD">
	     <input type="hidden" name="nexturl" value="http://www.google.com">
	    
	      <input type="email" class="form-control" id="registerUsername" name="registerUsername" placeholder="Email">
	    </div>
	  </div>
		<!-- Form Name -->
		<legend>Reset Passwords</legend>
		
		<div class="form-group">
   
		    <div id="passwordinput" class="col-sm-4">
		      <input type="password" class="form-control" id="registerPassword" placeholder="Password" name="registerPassword" onKeyUp="validation()">
		      <span id="message1" class="help-block displaynone">Passwords Do not match</span>
		      <span id="message2" class="help-block displaynone">Need 8 or more charcters</span>
		    </div>
		    <div id="passcheck" class="col-sm-4">
		      <input type="password" class="form-control" id="inputPassword2" placeholder="Password Again" onKeyUp="validation()">
		      <span id="message3" class="help-block displaynone">Passwords Do not match</span>
		
		    </div>
		    <div id="passcheck" class="col-sm-4">
		    	<button type="submit" class="btn btn-primary" style="width:100%">Reset</button>
		    </div>
		  </div>
				
		</fieldset>
		</form>

		</div>

<? }else if($success != NULL){  ?>
	
	<div class="container centered" style="@media(max-width:767px){height:500px;}">   
		<center><h2>Password reset sucessfully</h2></center>
	</div>
<?}else require 'denied.php';?> 