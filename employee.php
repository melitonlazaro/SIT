<html>
<head>
		
		
			 <meta charset="utf-8">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
		  <script src="js/jscookmenu.min.js"></script>
		  <script src="js/jquery-1.12.4.min.js"></script>
		  <script src="js/wb.carousel.min.js"></script>
		  <script src="js/bootstrap.js"></script>
		  <script src="js/npm.js"></script>
		  
		  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

			<!-- Bootstrap -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<script src="js/bootstrap.min.js"></script>

<style type="text/css">
[hidden] {
  display: none !important;
}

</style>	
			
	</head>
<br><br>

<div class="container">
		<div class="row">

			<div class="col-md-8" >
					<div class="input-group" >
			  		<form>
		               <span class="input-group-btn" >
		               <input type="text" name="search_text" id="search_text" class="form-control" placeholder="Search...">
		            </form>
            	</div>
				<div id="result">
				<!-- Ajax table -->
				</div>	
			</div>
		  <div class="col-md-4">
		  		<br><br><br>
		  		

		  		<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">IT Concerns <span class="glyphicon glyphicon-question-sign"  data-toggle="tooltip" style="float:right;" title="Tech Support Concerns? Please fill up the form to send concerns to the IT Department"></span></h3>
								</div>
					<div class="panel-body">
						<div class="form-group">
						    <form method="POST" action="bc.php?action=addticket" enctype="multipart/form-data">	
						    	<input type="text" name="name" placeholder="Name" class="form-control"><br><br>
						    	<select name="department" class="form-control">
						    		<option>Department</option>
						    		<option>IT Department</option>
						    		<option>Marketing</option>
						    		<option>Sales</option>
						    		<option>Customer Service</option>
						    		<option>Human Resource</option>
						    		<option>Treasury</option>

						    	</select><br><br>
						    	
						    	<textarea class="form-control" name="concern" rows="5" placeholder="Concerns"></textarea><br><br> 
						    	<label class="btn btn-success">
						    		Upload Screenshots
						    	<input type="file" name="screenshot">
						    	</label><br><br> 

						    	<input type="submit" value="Submit Concern" class="form-control">
						    </form>	
						</div>    
					</div>
				</div>




		  </div>
		</div>
</div>
<a href="skype:-skype-name-?chat">Start chat</a><br>
<a href="skype:-skype-name-?call">Call</a><br>
<a href="skype:-skype-name-?add">add</a><br>
<a href="skype:-skype-name-?userinfo">userinformation</a><br>
<a href="skype:-skype-name-?voicemail">voicemail</a><br>
<a href="skype:-skype-name-?sendfile">sendfile</a><br>


</html>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>

<script>
				$(document).ready(function(){

				 load_data();

				 function load_data(query)
				 {
				  $.ajax({
				   url:"fetch.php",
				   method:"POST",
				   data:{query:query},
				   success:function(data)
				   {
				    $('#result').html(data);
				   }
				  });
				 }
				 $('#search_text').keyup(function(){
				  var search = $(this).val();
				  if(search != '')
				  {
				   load_data(search);
				  }
				  else
				  {
				   load_data();
				  }
				 });
				});
</script>