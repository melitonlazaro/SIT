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
  		<link rel="shortcut icon" href="favicon.png">
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
#list_header
{
	font-size: 18px;

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
		<h1><span class="glyphicon glyphicon-user"></span>&nbsp Employee Directory</h1>
	</div>
	<hr>
	<div class="container-fluid">
		<p>View Ergo employees information </p>

		<br><br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
					<br><br><br>
					</ol>
						<?php 
							echo '<p id="list_header"> Location </p>';
							foreach ($count_location as $cl) {
								echo '<a href="bc.php?location='.$cl["location"].'">
									<p>'.$cl["location"].' ('.$cl["employee"].')</p></a>';
							}
						 ?>
						<?php
							echo '<p id="list_header"> Departments </p>';
							 foreach ($count_department as $c) 
							{
								echo '<a href="bc.php?action=manage_employees?department='.$c["department"].' "> ';
								echo '<p>'.$c["department"].'('.$c["employee"].')</p></a>';
							} 
						?>
					</ol>
		
				</div>
				<div class="col-md-10" >
					<div class="form-group" >
						
							<span class="input-group-btn" >
							<input type="text" name="search_text" id="search_text" class="form-control" placeholder="Search by First Name or Last Name">
					</div>	
					<ol class="breadcrumb">
			            <li class="breadcrumb-item"><a href="bc.php?action=index">Home</a></li>
			            <li class="breadcrumb-item"><?php echo $_GET['department'] ?></li>

			         </ol>
		        		<table class="table table-hover table-responsive table-bordered" id="tickettable" >
						        <tr id="tablehead">
						        	<th>First Name</th>
							        <th>Last Name</th>
							        <th>Department</th>
							        <th>Location</th>
							        <th>Local Directory</th>
							        <th colspan="2">Email</th>          
							        <th>Status</th>

						        </tr>
						    <?php 
							    if(isset($result_sort_location)) 
							    {
							    	foreach ($result_sort_location as $sd) 
							    	{
							    		echo '
							    			<tr>
											    <td>'.$sd["first_name"].'</td>
											    <td>'.$sd["last_name"].'</td>
											    <td>'.$sd["department"].'</td>
											    <td>'.$sd["location"].'</td>
											    <td>'.$sd["directory"].'</td>
											    <td>'.$sd["email"].'</td>
											    <td><a href="mailto: '.$sd["email"].' " ><span class="glyphicon glyphicon-envelope"></a></td>
											    <td>'.$sd["status"].'</td>

											</tr>
							    			 ';
							    	}
							    }

						    ?>
						</table>
				</div>
			</div>	
		</div>
	</div>
	
	
<br><br><br><br>
<br><br><br><br>

	<?php include "footer.php"; ?>
</body>
</html>

