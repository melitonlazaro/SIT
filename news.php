
<html>
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
  	#tablehead
    {
      background-color: #343d46;
      color: white;
    }

</style>
</head>
<body>
	<div class="container-fluid">
		<?php include "admin_nav.php"; ?>
	</div>
	<br><br><br>
	<ol class="breadcrumb pull-right">
	  <li><a href="bc.php?action=dashboard">Dashboard</a></li>
	  <li class="active">News</li>
	</ol>
	<div class="container-fluid" id="news_container">
		<br>
		<h1> <span class="glyphicon glyphicon-comment" style="opacity:0.5"></span>&nbsp;News and Announcements</h1>
		<br><br>
		<a href="publish_news.php"><button class="btn btn-info">Publish News</button></a>
		<br><br>
			<table class="table table-bordered table-hover">  
                <tr id="tablehead">  
	            	<th>Announcement ID</th>
		            <th>Title</th>
		            <th>Author</th>
		            <th>Date Published</th>
		            <th>Time Published</th>          
		            <th>Actions</th>
	            </tr>
	            <?php 
	            	foreach ($result as $r) 
	            	{
	            		echo 
	            		'
	            			<tr>
	            			<td>'.$r['announcement_id'].'</td>
	            			<td>'.$r['title'].'</td>
	            			<td>'.$r['author'].'</td>
	            			<td>'.$r['date_published'].'</td>
	            			<td>'.$r['time_published'].'</td>
	            			<td>Actions up here</td>
	            			</tr>
	            		';
	            	}
	             ?>
			</table>
	</div>
<br><br><br>


</body>
</html>