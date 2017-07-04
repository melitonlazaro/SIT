<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/jscookmenu.min.js"></script>
	<script src="js/jquery-1.12.4.min.js"></script>
	<script src="js/wb.carousel.min.js"></script>
	<link href="css/Menu.css" rel="stylesheet">
	<style>
	nav a
	{
		text-decoration: none;
		font-size: 14px;
	}
	</style>

	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<nav id="custom-bootstrap-menu" class="navbar navbar-default navbar-fixed-top navbar-custom">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="">
	    </a>
		
		<a class="navbar-brand" href="">
	     <img alt="company" src="ergo.png" width= 50px height=30px style="margin-bottom=5px;"/>
	    </a>
		
	    </div>
		
		
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="bc.php?action=dashboard"><span class="glyphicon glyphicon-scale" aria-hidden="true"></span> Dashboard <span class="sr-only"></span></a></li>
	        <li><a href="bc.php?action=adminpage"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Technical Concern</a></li>
					<li>
						<div class="btn-group">
							<a class="btn dropdown-toggle" data-toggle="dropdown"  role="button"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;Inventory<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="bc.php?action=mousetbl">Mouse</a></li>
								<li><a href="bc.php?action=hubtbl">HUB</a></li>
								<li><a href="bc.php?action=inktbl">Ink</a></li>
								<li><a href="bc.php?action=keyboardtbl">Keyboard</a></li>
								<li><a href="bc.php?action=monitortbl">Monitor</a></li>
								<li><a href="bc.php?action=printertbl">Printer</a></li>
								<li><a href="bc.php?action=projectortbl">Projector</a></li>
								<li><a href="bc.php?action=tonertbl">Toner</a></li>
								
							
							</ul>
							
						</div>
					</li>
				</ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li class="active"><a href="LogOut.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

</body>
</html>
