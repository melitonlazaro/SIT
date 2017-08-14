<<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/jscookmenu.min.js"></script>
	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/wb.carousel.min.js"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <link href="css/Dashboard.css" rel="stylesheet">

<style type="text/css">
	#news_container
	{
    	background-color: #e7f3f9;
    	border-radius:10px;
  	}

</style>
</head>
<body>
	<?php include "admin_nav.php"; ?>
	<br><br><br>
	<div class="container" id="news_container">
		<h1> <span class="glyphicon glyphicon-comment" style="opacity:0.5">&nbsp</span>News and Announcements</h1>
		<br><br>
		<div class="row">

			<div class="col-md-4 pull-right">
				<div class="panel panel-default">
					<div class="panel-body" id="news_number">
						Number of News and Announcements this Month (static)
					</div>
					<div class="panel-footer" id="news_number">
						Number of News and Announcements
					</div>
				</div>
			</div>

		</div>
		<div class="container">
			*table for news headlines, lead, date and time of published, author

		</div>

	</div>



</body>
</html>