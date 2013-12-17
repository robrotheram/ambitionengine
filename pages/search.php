<? 
	require 'ambitionengine/fuctions.php';
	$results =   MYSQL_search('test','');
	$length =  count ($results->jobs);
	
		
		?>
    <div class="container white">

    <div class="row">

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="height:450px; overflow:auto;">
     <h2>Jobs</h2>
		<table class="table" style="width:100%">
			<tr>
				<th>Job Name</th>
				<th>Location</th>
			</tr>
			<?for ($i = 0; $i < $length; $i++) {?>


		<tr>
			 <td><? echo $results->jobs[$i]->title;?></td>
   			<td><? echo $results->jobs[$i]->locations;?></td>
		</tr>
		<? }?>
		</table>
    </div>
  </div>
  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="height:450px; overflow:auto;">
    	<h2>Cources</h2>
		<table class="table" style="width:100%">
		<tr>
			<td colspan="2"> Comming Soon</td>
		</tr>
		</table>
    </div>
  </div>


 <div class="col-sm-6 col-md-4">
     <div class="thumbnail" style="height:450px; overflow:auto;">
    	<h2>Voluntering</h2>
		<table class="table" style="width:100%">
		<tr>
			<td colspan="2"> Comming Soon</td>
		</tr>
		</table>
    </div>
  </div>


    </div>
    
   <hr>
   <div class="row">

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
   <h2>Internships</h2>
		<table class="table" style="width:100%">
		<tr>
			<td colspan="2"> Comming Soon</td>
		</tr>
		</table>

    </div>
  </div>
  
  
 <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    	<h2>Groups</h2>
		<table class="table" style="width:100%">
		<tr>
			<td colspan="2"> Comming Soon</td>
		</tr>
		</table>
    </div>
  </div>


 <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    	<h2>Alumni</h2>
		<table class="table" style="width:100%">
		<tr>
			<td colspan="2"> Comming Soon</td>
		</tr>
		</table>
    </div>
  </div>

    </div>
    </div>
 
	