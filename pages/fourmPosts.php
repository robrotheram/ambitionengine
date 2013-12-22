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

<div class="container white">
	<div class="row" style="border: 1px solid #cdd0d4;border-buttom: 1px solid #cdd0d4; width: 99%; margin: 0 auto;">
		<table width="100%">
		  <tr>
		    <th rowspan="2"style="border-bottom: 1px solid #cdd0d4;border-buttom: 1px solid #cdd0d4; border-right: 1px solid #cdd0d4;border-buttom: 1px solid #cdd0d4; width: 100px;"><center><img class="img img-rounded" src="<? echo $grav_url; ?>" alt="logo" width="96px" height="96 px"></center></th>
		    <th style="border-bottom: 1px solid #cdd0d4;border-buttom: 1px solid #cdd0d4;"><h4 style="margin-left: 10px;"><? echo $reults['title'];?></h4></td></th>
		  </tr>
		  <tr>
		    <td rowspan="3"><p style="margin-left: 10px;"><? echo $reults['content']; ?></p></td>
		  </tr>
		  <tr>
		    <td style="border-bottom: 1px solid #cdd0d4;border-buttom: 1px solid #cdd0d4; border-right: 1px solid #cdd0d4;border-buttom: 1px solid #cdd0d4;"><? echo $person['forename']." ".$person['surname'];?></td>
		  </tr>
		  <tr>
		    <td  style="border-right: 1px solid #cdd0d4;border-buttom: 1px solid #cdd0d4;"><? echo $reults['date'];?></td>
		  </tr>
		</table>
	</div>
	<hr />
	
	<?  while ($r = mysqli_fetch_array($replys)) { 
		$email = $r['username'];
		$default = "http://yoyoambition.com/beta/img/profile.png";
		$size = 128;
		$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
		
		
		$replyperson = mysqli_fetch_array(MYSQL_getUser($r['username']));
		
		?>
<br>
	<div class="row" style="border: 1px solid #cdd0d4;border-buttom: 1px solid #cdd0d4;width: 99%; margin: 0 auto; ">
		<table width="100%">
		  <tr>
		    <th style="border: 1px solid #cdd0d4;border-buttom: 1px solid #cdd0d4; width: 100px;"><center><img class="img img-rounded" src="<? echo $grav_url;?>" alt="logo" alt="logo" width="96px" height="96 px"></center></th>
		    <td rowspan="2"><? echo $r['content']?></th>
		    <th style="border-left: 1px solid #cdd0d4;border-buttom: 1px solid #cdd0d4; width: 50px;"><center><img class="img-circle" src="https://cdn1.iconfinder.com/data/icons/windows-8-metro-style/64/thumbs_up.png" width="48" height="48" alt="logo"></center></td>
		  </tr>
		  <tr>
		  	<td style="border-right: 1px solid #cdd0d4;border-buttom: 1px solid #cdd0d4; width: 100px;"><? echo $replyperson['forename']." ".$replyperson['surname'];?></td>
		    <td style="border-left: 1px solid #cdd0d4;border-buttom: 1px solid #cdd0d4; width: 50px;"><center><img class="img-circle" src="https://cdn1.iconfinder.com/data/icons/windows-8-metro-style/64/thumbs_down.png" width="48" height="48"  alt="logo" ></center></td>
		  </tr>
		</table>

	</div>
	<?} ?>
	<br>
	<hr>
	<br>
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
