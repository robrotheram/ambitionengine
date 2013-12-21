  <div class="container white">
       	<form name="email" id="email"  class="form-horizontal" role="form" method="post" action="ambitionengine/api.php" onsubmit="encrypt();">
     <input type="hidden" name="content_type" value="OTHER">
     <input type="hidden" name="request_type" value="ADDORG">
     
<fieldset>
	<legend>Login Details</legend>
	  <div class="form-group">
	  	<div class="col-sm-12">
       <input type="email" class="form-control" name="username" placeholder="username" >
    </div>
  </div>
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
      <input type="text" class="form-control" name="CompanyName" placeholder="Company Name" >
    </div>
    <div class="col-sm-6">
     <input type="text" class="form-control" name="CompanyNum" placeholder="Company/charity number" >
    </div>
  </div>
    <div class="form-group">
    <div class="col-sm-12">
       <input type="text" class="form-control" name="CompanyCont" placeholder="Contact Email and or Phone" >
    </div>
  </div>
 <div class="form-group">
    <div class="col-sm-12">
       <input type="text" class="form-control" name="url" placeholder="Website" >
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-6">
    <label>Sector</label>
     <select class="form-control" name="sector" placeholder="Sector">
	<option>Science and engineering professionals</option>
	<option>Health professionals</option>
	<option>Teaching professionals</option>
	<option>Business and administration professionals</option>
	<option>Legal, social and cultural professionals</option>
	</select>
    </div>
    <div class="col-sm-6">
    	<div class="col-sm-2">
    		
    	<input id="maleRadio" class="genderRadio" type="radio" name="size" value="small">
            <label class="radioLabel" for="maleRadio">Small(1-10)</label>          
          </input>
          </div>
          <div class="col-sm-3">
          <input id="femaleRadio" class="genderRadio" type="radio" name="size" value="Medium">
            <label class="radioLabel" for="femaleRadio">Medium(11-100)</label>          
          </input>
          </div>
           <div class="col-sm-2">
          <input id="femaleRadio" class="genderRadio" type="radio" name="size" value="Large">
            <label class="radioLabel" for="femaleRadio">Large(100+)</label>          
          </input>
          </div>
    </div>
  </div>
    <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="subject" name="location" placeholder="Postcode">
    </div>
  </div>
  
     <div class="form-group">
    <div class="col-sm-12">
    	<label>Bannar img url (800px, 400px)</label>
      <input type="text" class="form-control" id="subject" name="bannarimg" placeholder="url">
    </div>
  </div>
  </fieldset>
  <hr>
  <fieldset>
	<legend>Advanced Info</legend>	
   <div class="form-group">
    <div class="col-sm-12">
         <textarea id="textarea" name="terms" class="form-control" rows="4" placeholder="Basic terms to describe your business seperate with commars eg(php,develeopment)"></textarea>
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