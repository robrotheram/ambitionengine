<? 
	$userid =  $_SESSION['userid'] ;
	if($userid == NULL){ require 'denied.php';}else{ 
		?>
<div class="container white">
	
	<form name="email" id="email"  class="form-horizontal" role="form" method="post" action="ambitionengine/api.php">
     <input type="hidden" name="content_type" value="OTHER">
     <input type="hidden" name="request_type" value="ADDPOST">
     <input type="hidden" name="username" value="<? echo $userid;?> ">
<fieldset>
	<legend>Create Post</legend>

  <div class="form-group">
  	
    <div class="col-sm-12">
      <input type="text" class="form-control" name="title" placeholder="Title" >
    </div>
   
</div>
  <div class="form-group">
  	
    <div class="col-sm-12">
      <input type="text" class="form-control" name="terms" placeholder="Basic terms to describe your business seperate with commars eg(php,develeopment)" >
    </div>
   
</div>
        <div class="form-group">
    <div class="col-sm-12">
         <textarea id="textarea" name="content" class="form-control" rows="4" placeholder="content"></textarea>
    </div>
  </div>
    </fieldset>
    <div class="form-group">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-primary" style="width:100%">Submit</button>
    </div>
  </div>
    </form>
    </div>

	
</div>



<? }?>