
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
				
					
				
					<div class="row">
						
						
						<div class="col-md-4">
						
							<table class="table table-striped table-hover">
								  <tr>
									<th>Hub No.</th>
									<th>Hub Type</th>
									<th>Serial Number</th>
								  </tr>
								  
									<?php
									if( isset($request) ){
											foreach($request as $r){
												echo '
													<tr>
														<td>'.$r['hub_id'].'</td>
														<td>'.$r['type_hub'].'</td>
														<td>'.$r['sn_hub'].'</td>
													</tr>';
											}
										}
										?>
										


								   
							</table>
						
						</div>
					
					</div>
					
					
					
				
				
		</body>
</html>