<? 
	$userid =  $_SESSION['userid'] ;
	if($userid == NULL){ require 'denied.php';}else{ ?>
    <div class="container white">
       	<form name="email" id="email"  class="form-horizontal" role="form" method="post" action="ambitionengine/api.php" onsubmit="encrypt();">
     <input type="hidden" name="content_type" value="OTHER">
     <input type="hidden" name="request_type" value="UPDATEUSER">
     <input type="hidden" name="username" value="<? echo $userid;?> ">
     
<fieldset>
	<legend>Change Password</legend>
	  <div class="form-group">
   <div id="passwordinput" class="col-sm-6">
		      <input type="password" class="form-control" id="registerPassword" placeholder="Password" name="registerPassword" onKeyUp="validation()">
		      <span id="message1" class="help-block displaynone">Passwords Do not match</span>
		      <span id="message2" class="help-block displaynone">Need 8 or more charcters</span>
		    </div>
		    <div id="passcheck" class="col-sm-6">
		      <input type="password" class="form-control" id="inputPassword2" placeholder="Password Again" onKeyUp="validation()">
		      <span id="message3" class="help-block displaynone">Passwords Do not match</span>
		
		    </div>
		   </div>
</fieldset>
<hr>
<fieldset>
	<legend>Basic Info</legend>

  <div class="form-group">
  	
    <div class="col-sm-6">
      <input type="text" class="form-control" name="firstname" placeholder="First Name">
    </div>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="lName" placeholder="Last Name">
    </div>
  </div>
    <div class="form-group">
    <div class="col-sm-12">
       <div id="datetimepicker" class="input-append date input-group" style="width: 100%" >
 
  <span class="input-group-addon glyphicon glyphicon-calendar add-on"></span>
  <input type="text" class="form-control" name="dob" placeholder="DOB" style="width: 100%" data-time-icon="icon-time" data-date-icon="icon-calendar">
</div>
       	
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-6">
    <label>Ocupation</label>
     <select class="form-control" name="ocupation" placeholder="ocupation/place of study">
	<option>Professor</option>
	<option>Doctor</option>
	<option>PHD</option>
	<option>Under - Graduate</option>
	<option>Student</option>
	<option>Full-time work</option>
	<option>Part -time work</option>
	<option>unemployed</option>
	</select>
    </div>
    <div class="col-sm-6">
    	<div class="col-sm-3">
    	<input id="maleRadio" class="genderRadio" type="radio" name="gender" value="male">
            <label class="radioLabel" for="maleRadio">Male</label>          
          </input>
          </div>
          <div class="col-sm-3">
          <input id="femaleRadio" class="genderRadio" type="radio" name="gender" value="female">
            <label class="radioLabel" for="femaleRadio">Female</label>          
          </input>
          </div>
    </div>
  </div>
    <div class="form-group">
    <div class="col-sm-12">
      <input type="texr" class="form-control" id="subject" name="location" placeholder="logation e.g swansea">
    </div>
  </div>
  </fieldset>
  <hr>
  <fieldset>
	<legend>Advanced Info</legend>	
	 <div class="form-group">
    <div class="col-sm-12">
         <textarea id="textarea" name="about" class="form-control" rows="4" placeholder="Bio"></textarea>
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-12">
         <textarea id="textarea" name="hobbies" class="form-control" rows="4" placeholder="Hobies and/or interest seperate with commas"></textarea>
    </div>
  </div>
  </fieldset>
  <hr />
  <div class="form-group">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-primary" style="width:100%">Submit</button>
    </div>
  </div>

  
       	  </form>
    	
	</div>
    <? }?>
 
	