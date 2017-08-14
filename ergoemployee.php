<html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="footer, basic, centered, links" />

		<script src="js/jscookmenu.min.js"></script>
		<script src="js/jquery-1.12.4.min.js"></script>
		<script src="js/wb.carousel.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/npm.js"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   		<link href="css/bootstrap.min.css" rel="stylesheet">
   		<script src="js/bootstrap.min.js"></script>
   		<link href="css/Dashboard.css" rel="stylesheet">
	<title></title>
<style type="text/css">
div#myDIV 
{
    position:fixed;
    width:20%;
    height:4%;
    right:0%;
    bottom:2%;
    z-index: 10;
}

</style>


</head>
<body>
	<?php include "header_sub.php"; ?>

<div id="myDIV">
			<a href="skype:live:jcastro_379 live:acahapay?chat">
				<span class="label label-info pull-right" id="labels"><img src="skype-icon.png" width="30px" height="30px">&nbspChat with us!</span>
			</a>
</div>



	<div class="container">
		<br><br><br>
		<h1><span class="glyphicon glyphicon-user"></span>&nbsp Employee Portal Access</h1>
	</div>
	<hr>
	<div class="container">
		<p>View Ergo employees information </p>
	
		<br><br>
			<div class="col-md-8" >
				<div class="form-group" >
					<form method="POST">
						<span class="input-group-btn" >
						<input type="text" name="search_text" id="search_text" class="form-control" placeholder="Search...">

					</form>

				</div>	
			</div>
	</div>
	<div class="container">
		<div id="result" name="result"></div> 
		<!-- This Div is responsible for displaying the employee table -->
	</div>


</body>
</html>
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
