
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

  <script>
	
	
	$(document).ready(function(){
	  $('.danger').popover({ 
		html : true,
		content: function() {
		  return $('#popover_content_wrapper').html();
		}
	  });
	});
	
	
	
	$('ul.navbar-nav li.dropdown').hover(function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});
	
	
	
	
  </script>
  
  
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
      <li><a href="#">Home</a></li>
      
      <li class="dropdown">
	  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Support<span class="caret"></span></a>
		<ul class="dropdown-menu" role="menu">
            <li><a href="">FAQs</a></li>
            <li><a href="">Ask for assistance</a></li>
        </ul>
		</li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact Us<span class="caret"></span></a>
		<ul class="dropdown-menu" role="menu">
            <li><a href="">Skype</a></li>
			<li><a href="#">List of Employees</a></li>
            <li><a href="">Contact Details</a></li>
        </ul>
	  </li>
	  
      <li><a href="#">Announcement</a></li>
	  <li><a class='danger' data-toggle="popover" data-placement='bottom'  href='#'>Log In</a>
			<div id="popover_content_wrapper" style="display: none">
				  <div id="login">
				  
					<br />
					<center>
					<label for="username">Username</label>
					<input type="text" id="username" name="username">
					<br />
					<br />
					
					<label for="password">Password</label>
					<input type="password" id="password" name="password">
				  </div>
				  
				  <br />
				  <br />
					<button type="submit" onclick="" class="btn btn-primary btn-lg" value="submit" name="submit" style="display: block; margin: 0 auto;">Sign In</button>
					</center>
			
			</div>
			
			
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
