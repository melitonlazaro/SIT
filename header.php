
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  
  <link href="css/header.css">

  <style>

		
		.navbar {
			position: relative;
			height:90px;
			margin-bottom:0px;
		}
		.navbar-brand {
			padding-top: 25px;
			padding-left:40px;
		}
		
		
		.navbar-nav{
			padding-top:20px;
			padding-right:40px;
		}
		
		.navbar-nav li{
			font-family:"Courier New";
			font-size:18px;
			
		}
		
		
		.dropdown:hover .dropdown-menu {
			display: block;
			margin-top: 0; // remove the gap so it doesn't close
		 }
		
		.popover{
			width:280px;
			height:300px; 
		}
		
		#login {
			font-family:"Courier New";
			font-size:17px;
			height:300px;
			width:300px;

			
		}
		
		#login button{
			font-family:"Courier New";
			font-size:17px;
			
		}
		
  </style>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="ergo.png" width="99"></a>
	 
    </div>
    <ul class="nav navbar-nav navbar-right" role="tablist">
      <li><a href="bc.php?action=index">Home</a></li>
      
      <li class="dropdown">
	  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Support<span class="caret"></span></a>
		<ul class="dropdown-menu" role="menu">
            <li><a href="bc.php?action=ticketpage">Add Ticket</a></li>
      <li><a href="bc.php?action=ergoemployee">Employee Portal Access</a></li>
            <li><a href="bc.php?action=faq">FAQs</a></li>
        </ul>
		</li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact Us<span class="caret"></span></a>
		<ul class="dropdown-menu" role="menu">
         <li><a href="">Skype</a></li>
			   <li><a href="#">About Us</a></li>  
        </ul>
	  </li>
	  
      <li><a href="bc.php?action=news_list">Announcements</a></li>
   
    	<li class="dropdown">
          <a href="loginpage.php" >Login </a>
	    </li>
  	</ul>
  </div>

</nav>
 
 		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
    	<center>
      <img src="headerss/try.png" >
    	</center>
    </div>

    <div class="item">
    	<center>
    	<img src="headerss/try2.png">
    	</center>
    </div>

    <div class="item">
    	<center>
      <img src="headerss/try3.png">
  		</center>
    </div>

    <div class="item">
    	<center>
      <img src="headerss/try4.png">
  		</center>
    </div>

    <div class="item">
    	<center>
    		<img src="ergoslideshow.png" alt="Ergo Logo">
    	</center>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




</body>
</html>

