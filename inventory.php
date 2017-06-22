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
			
			<style>
				
				.navigatebar{
					float:left;
					height:100%;
					width:16%;
				}
				
				.table{
					list-style-type:none;
					
					width:200px;
					background-color:#f1f1f1;
					padding:25px 0px;
					height:100%;
				}
				
				.listed-items{
					width:100%;
					aign-left:25%;
				}
				.listed-items a{
					width:100%;
					display:block;
					color:#000;
					padding:8px 16px;
					text-decoration:none;
				}
				
				.listed-items a:hover{
					background-color:#555;
					color:white;
					width:100%;
				}
				
			</style>
			
			
			
	</head>
	
		<body>
			
			<?php include "Menu_System.php";?>
		
				
				<div class="panel-heading">Inventory</div>
				
					<div class="navigatebar">
						<ul class="table">
							<div class="listed-items">
								<li><a href="">Mouse</a></li>
								<li ><a href="">HUB</a></li>
								<li ><a href="">Ink</a></li>
								<li ><a href="">Keyboard</a></li>
								<li ><a href="">Monitor</a></li>
								<li ><a href="">Printer</a></li>
								<li ><a href="">Projector</a></li>
								<li><a href="">Toner</a></li>
							</div>
						</ul>
					
					</div>
				
		</body>
</html>