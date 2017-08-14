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
         #content
         {
            text-indent: 100px;
            text-align: justify;
         }
         #title
         {
            display: block;
         }
         #lead
         {
            font-size: 20px;
            font-weight: 300;
            line-height: 2.0;
            color:#646565;

         }
         .breadcrumb
         {
            width: auto;
            white-space: nowrap;
            overflow: hidden;
            text-overflow:ellipsis;
         }
         .breadcrumb li
         {
            display: inline;
         }
   	</style>
</head>
<body>

	<?php include "header_sub.php"; ?>
   <center>
      
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="bc.php?action=index">Home</a></li>
            <li class="breadcrumb-item"><a href="bc.php?action=news_list">News List </a></li>
            <li class="breadcrumb-item active"> <?php echo $result["title"];?></li>
         </ol>
     
   </center>
	<br><br><br>
  
   <div class="row">   
      <center>
         <div class="container">
            <h1 id="title"> <?php echo $result["title"];?></h1>
            <br>
            <div class="container-fluid">   
               <p id="lead"><?php echo $result["lead"]?> ewqoejwqojeowqjeoqwjeoqjoejqoejwqojeqwoj eqwje qw eo qweo qwe qwe owqe onnnakn ejwqo</p>
            </div>  
            <br><br><br>
            <div class="container">
               <p id="content" class="pull-left"> <?php echo $result["content"]; ?> </p>
            </div>
            <br><br><br>
            <div class="container">
               <p class="pull-left"> <?php echo $result["date_published"]; ?>
               |
               <?php echo $result["time_published"]; ?>
               |
               <span class="glyphicon glyphicon-user"></span> <?php echo $result["author"]; ?></p>
            </div>
         </div>
      </center>
    

   </div>
   <br><br><br><br>

</body></html>