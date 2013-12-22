  <? $userid =  $_SESSION['userid'] ;
	if($userid == NULL){ require 'denied.php';}else{?>
  <div class="container white">
       	<form name="email" id="email"  class="form-horizontal" role="form" method="post" action="ambitionengine/api.php" onsubmit="encrypt();">
     <input type="hidden" name="content_type" value="OTHER">
     <input type="hidden" name="request_type" value="ADDJOB">
     <input type="hidden" name="id" value="<? echo $userid; ?>">
     
<fieldset>
	<legend>Add a job</legend>

  <div class="form-group">
  	
    <div class="col-sm-6">
      <input type="text" class="form-control" name="title" placeholder="Job Title" >
    </div>
    <div class="col-sm-6">
     <input type="text" class="form-control" name="salery" placeholder="Salery" >
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-12">
         <textarea id="textarea" name="dec" class="form-control" rows="4" placeholder="Describe the Job"></textarea>
    </div>
  </div>
  </fieldset>
  <div class="form-group">
    <div class="col-sm-12">
         <textarea id="textarea" name="terms" class="form-control" rows="4" placeholder="Search terms for the job"></textarea>
    </div>
  </div>
  </fieldset>
  <hr />
  <div class="form-group">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-primary" style="width:100%">Submit</button>
    </div>
  </div>
  </div>
  
  <?} ?>

  
       	  </form>
    	
	</div>