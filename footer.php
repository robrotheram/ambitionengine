
</div>
<div id="footer">
<div style="height: 10px; width: 100%; background-color: #2CA3E7">
	<div class="container" >
		<div class="row" style=" margin-top: 25px;">
			<div class="col-lg-4"  style="border-right: 1px solid #55554F;border-buttom: 1px solid #cdd0d4; height:315px">
				<h4 style="text-align: center;"> About </h4>
				
				<p class="lead">
					Yoyoabmition is a small startup to help everyone young or old to get what they are passionate a reality
				</p> 
			</div>
			<div class="col-lg-4" style="border-right: 1px solid #55554F;border-buttom: 1px solid #cdd0d4;" >
				<h4 style="text-align: center;"> Contact </h4>
			
				<form name="email" id="email"  class="form-horizontal" role="form" method="post" action="src/email.php" onSubmit="return validateEmail();" >

  <div class="form-group">
    <div class="col-sm-12">
      <input type="email" class="form-control" id="emailFrom" name="emailFrom" placeholder="Email">
    </div>
  </div>
    <div class="form-group">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="subject" name="subject" placeholder="subject">
    </div>
  </div>
   <div class="form-group">
    <div class="col-sm-12">
         <textarea id="textarea" name="message" class="form-control" rows="4" placeholder="Message"></textarea>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-primary" style="width:100%">Send Message</button>
    </div>
  </div>
       	  </form>
				
			</div>
			<div class="col-lg-4" >
				<h4 style="text-align: center;"> Social Media</h4>
				
				<table width="100%"> 
					<tr>
						<td width="25%"><center><img src="https://cdn1.iconfinder.com/data/icons/social-papercut/128/facebook.png" width="64" height="64"/></center></td>
						<td width="25%"><center><img src="https://cdn1.iconfinder.com/data/icons/social-papercut/128/twitter.png" width="64" height="64"/></center></td>
						<td width="25%"><center><img src="https://cdn1.iconfinder.com/data/icons/social-papercut/128/google-plus.png" width="64" height="64"/></center></td>
						<td width="25%"><center><img src="https://cdn1.iconfinder.com/data/icons/social-papercut/128/android.png" width="64" height="64"/></center></td>
					</tr>
					<tr>
						<td width="25%"><center><img src="https://cdn1.iconfinder.com/data/icons/social-papercut/128/apple.png" width="64" height="64"/></center></td>
						<td width="25%"><center><img src="https://cdn1.iconfinder.com/data/icons/social-papercut/128/tumblr.png" width="64" height="64"/></center></td>
						<td width="25%"><center><img src="https://cdn1.iconfinder.com/data/icons/social-papercut/128/flickr.png" width="64" height="64"/></center></td>
						<td width="25%"><center><img src="https://cdn1.iconfinder.com/data/icons/social-papercut/128/linkedin.png" width="64" height="64"/></center></td>
					</tr>
					
					
				</table>
			</div>
		</div>
		
		
	</div>
	
</div>	
	

	 

	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
    <script type="text/javascript">
    
      $('#datetimepicker').datetimepicker({
      	pickTime: false,
        format: 'dd.MM.yyyy',
        language: 'en',
        startDate: '05/12/1992',
      });
    </script>
    
    <script>
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>

  </body>
</html>
