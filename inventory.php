<html>
	<head>
		<title>Inventory</title>
		
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
			
			
	</head>
	
		<body>
			<?php include "Menu_System.php";?>
			
			
			
			<br />
			<br />
				<div class="container">
					<div class="jumbotron jumbotron-custom"> <!-- JUMBOTRON -->
						  <center>
							<h2 class="header1">Mouse</h2>
						  </center>
					</div>
					
				
					<div class="row">
						
						<div class="col-md-8">
						
							<table class="table table-bordered table-hover table-striped">
								  <tr>
									<th>Mouse No.</th>
									<th>Mouse Type</th>
									<th>Serial Number</th>
								  </tr>
								  
									<?php
									if( isset($request) ){
											foreach($request as $r){
												echo '
													<tr>
														<td>'.$r['mouse_id'].'</td>
														<td>'.$r['type_mouse'].'</td>
														<td>'.$r['sn_mouse'].'</td>
													</tr>';
													
												echo '';
											}
										}
										?>
										


								   
							</table>
						
						</div>
					
					</div>
				</div>
					
					
				
				
		</body>
</html>