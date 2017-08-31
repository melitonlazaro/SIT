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
		<script src="js/pagination_news.js"></script>
  		<link rel="shortcut icon" href="favicon.png">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   		<link href="css/bootstrap.min.css" rel="stylesheet">
   	<style type="text/css">
   	#jumbotron_news
   	{
   		background-color: white;
   	
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
	<center>
      
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="bc.php?action=index">Home</a></li>
            <li class="breadcrumb-item"><a href="bc.php?action=news_list">News List </a></li>

         </ol>
     
   </center>
	<br>


	<h1>News and Announcements</h1>
	<div class="container">
		<div class="container">
			<form class="form-inline pull-right" method="POST" action="bc.php?action=searchnews">
				<div class="form-group">
					<label for="search_news">
						<input type="text" class="form-control" name="search_news" >
					</label>
				</div>
				<div class="form-group">
					<label for="search_button">
						<button type="submit" class=" form-control btn btn-default">Search</button>
					</label>
				</div>
			</form>
		</div>
	
		<div id="pagination_data">
		
		</div>
	</div>
</body>
</html>