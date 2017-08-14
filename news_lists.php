<html>
<head>
	<title></title>
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
   	<style type="text/css">
   	#jumbotron_news
   	{
   		background-color: white;
   		color:black;

   	}
   	#lead
   	{
   		color:#646565;
   	}

   	#date_time
   	{
   		width:15%;
   	}
   	</style>
</head>
<body>

	<?php include "header_sub.php"; ?>

	<br><br><br>


	<h1>News and Announcements</h1>
	<div class="container">
		<?php 
			foreach ($result as $r) {
				echo '
						<div class="row">
							<div class="col-md-2">
								<br><br><br>
								<div class="container">
									<div class="panel-body" id="date_time">
										'.$r["date_published"].'
										<br>
										'.$r["time_published"].'
										<br>
										<span class="glyphicon glyphicon-user"></span>&nbsp'.$r["author"].'
									</div>
								</div>
							</div>
							<div class="col-md-10">	
								<div class="jumbotron" id="jumbotron_news">
									<h2><b>'.$r["title"].'</b></h2>
									<br>
									<h6 id="lead">'.$r["lead"].'</h6>
									<br><br>
									<form method="POST" action="bc.php?action=show_news">
										<input type="hidden" name="news_id" value="'.$r["announcement_id"].'">
										<button type="submit" class="btn btn-default"> Read More </button>
									</form>
								</div>
							</div>
						</div>
					 ';
			}

		 ?>	
	</div>
</body>
</html>