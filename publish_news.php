<?php 
	session_start();
 ?>

<html>
<head>
	<title></title>
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
</head>
<body>
	<?php include "admin_nav.php"; ?>
	<?php include "news_tools.php"; ?>
	<br><br><br><br>
		<div class="container" id="news_container">
			
			<div class="form-group">
				<form method="POST" action="bc.php?action=publishnews">
					<input type="hidden" name="author" value="<?php echo $_SESSION['username'];?>">
					<input type="text" name="title" class="form-control" placeholder="Title">
					<br>
					<input type="text" name="lead" class="form-control" placeholder="Lead">
					<br>
					<textarea class="form-control" rows="20" cols="50" placeholder="Content" name="content" id="content"></textarea>
					<br>
					
					<center>
					<input type="submit" class="btn btn-success" value="Publish">  


				</form>
			</div>
		</div>

</body>
</html>
