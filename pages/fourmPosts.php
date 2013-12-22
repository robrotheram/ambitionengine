<? 

	$userid =  $_SESSION['userid'] ;
	if($userid == NULL){ require 'denied.php';}else{
		$id = $_GET['id'];
		require_once 'ambitionengine/fuctions.php';
		$reults =  mysqli_fetch_array(MYSQL_getPostbyID($id));
		$person =  mysqli_fetch_array(MYSQL_getUser($reults['username']));
		$replys = MYSQL_getReplys($id);
		$email = $reults['username'];
		$default = "http://yoyoambition.com/beta/img/profile.png";
		$size = 128;
		$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;

?>
<style>
	body{
		background-image: url('img/whitey.png');
	}
	
</style>

  <div class="business-header">
    
      <div class="container" style="padding-top: 20px">

        <div class="row" style="color:#FFFFFF">
          <div class="col-lg-1">
          	  	<table width="100%;" style="margin-left:-15px;">
				  <tr>
				    <th style="width: 100px;"><center><img class="img img-rounded" src="<?php echo $grav_url; ?>" alt="logo" width="96px" height="96 px"></center></th>
				  </tr>
				  <tr>
				    <td><center><? echo $person['forename']." ".$person['surname'];?></center></td>
				  </tr>
				  <tr>
				    <td><center><? echo $reults['date'];?></center></td>
				  </tr>
				</table>
          </div>
          <div class="col-lg-11">
          	<table width="100%">
		  <tr>
		    <th class="btn btn-info" style="width: 100%"><? echo $reults['title'];?></th>
		  </tr>
		  <tr>
		    <td style="padding-top: 20px"><? echo $reults['content'];?> </td>
		  </tr>
		</table>
          </div>
        </div>
      
      </div>
    
    </div>
    


<div class="container">
	
	<?  while ($r = mysqli_fetch_array($replys)) { 
		$email = $r['username'];
		$default = "http://yoyoambition.com/beta/img/profile.png";
		$size = 128;
		$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
		
		
		$replyperson = mysqli_fetch_array(MYSQL_getUser($r['username']));
		
		?>
	

		<div class="row" style="border: 1px solid #cdd0d4;border-buttom: 1px solid #cdd0d4;width: 99%; margin: 0 auto; margin-top: 20px;
	-webkit-box-shadow: 5px 5px 5px 1px rgba(0,0,0,0.2);
	box-shadow: 5px 5px 5px 1px rgba(0,0,0,0.2);
	background-image: url('img/paper.png'); ">
		<table width="100%">
		  <tr>
		    <th style="border: 1px solid #cdd0d4;border-buttom: 1px solid #cdd0d4; width: 100px;"><center><img class="img img-rounded" src="<? echo $grav_url;?>" alt="logo" alt="logo" width="96px" height="96 px"></center></th>
		    <td rowspan="2"><? echo $r['content']?></th>
		    <th style="border-left: 1px solid #cdd0d4;border-buttom: 1px solid #cdd0d4; width: 50px;">
		    	<form name="email" id="email"  class="form-horizontal st" role="form" method="post" action="ambitionengine/api.php">
			     <input type="hidden" name="content_type" value="OTHER">
			     <input type="hidden" name="request_type" value="UPDATERANK">
			     <input type="hidden" name="id" value="<? echo $r['id']; ?> ">
			      <input type="hidden" name="rank" value="<? echo ($r['rank'] +1) ?> ">
			       <input type="hidden" name="page" value="<? echo $id; ?> ">
		    	<center><input type="image" src="https://cdn1.iconfinder.com/data/icons/windows-8-metro-style/64/thumbs_up.png"></center>
		    	</form>
		    	</td>
		  </tr>
		  <tr>
		  	<td style="border-right: 1px solid #cdd0d4;border-buttom: 1px solid #cdd0d4; width: 100px;"><? echo $replyperson['forename']." ".$replyperson['surname'];?> </td>
		    <td style="border-left: 1px solid #cdd0d4;border-buttom: 1px solid #cdd0d4; width: 50px;">
			<form name="email" id="email"  class="form-horizontal st" role="form" method="post" action="ambitionengine/api.php">
			     <input type="hidden" name="content_type" value="OTHER">
			     <input type="hidden" name="request_type" value="UPDATERANK">
			     <input type="hidden" name="id" value="<? echo $r['id']; ?> ">
			      <input type="hidden" name="rank" value="<? echo ($r['rank'] -1) ?> ">
		    	<center><input type="image" src="https://cdn1.iconfinder.com/data/icons/windows-8-metro-style/64/thumbs_down.png"></center>
		    	</form>
			
			

			</td>
		  </tr>
		</table>

	</div>
	<? }?>
	<br>
	<br>
	<hr />
	<form name="email" id="email"  class="form-horizontal st" role="form" method="post" action="ambitionengine/api.php">
     <input type="hidden" name="content_type" value="OTHER">
     <input type="hidden" name="request_type" value="ADDREPLY">
     <input type="hidden" name="username" value="<? echo $userid;?> ">
      <input type="hidden" name="id" value="<? echo $id; ?> ">
     
<fieldset>
	<legend>Add Reply</legend>

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

















<? } ?>
