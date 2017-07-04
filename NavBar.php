<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>MySQL Database</title>
		<link href="dist/css/bootstrap.css" rel="stylesheet"/>
		<style>
		.navbar-custom {
    background-color:#000000;
    color:#ffffff;
    border-radius:0;
		}

		.navbar-custom .navbar-nav > li > a {
		    color:#fff;
		}

		.navbar-custom .navbar-nav > .active > a {
		    color: #ffffff;
		    background-color:transparent;
		}

		.navbar-custom .navbar-nav > li > a:hover,
		.navbar-custom .navbar-nav > li > a:focus,
		.navbar-custom .navbar-nav > .active > a:hover,
		.navbar-custom .navbar-nav > .active > a:focus,
		.navbar-custom .navbar-nav > .open >a {
		    text-decoration: none;
		    background-color:  #595959;
		}

		.navbar-custom .navbar-brand {
		    color:#eeeeee;
		}
		.navbar-custom .navbar-toggle {
		    background-color:#eeeeee;
		}
		.navbar-custom .icon-bar {
		    background-color: #595959;
		}

		</style>
</head>
<body>

<nav class="navbar navbar-custom ">
	<div class="container-fluid">
		<!-- Logo -->
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Home</a>
			</div>

		<!-- Menus -->
			<div>

				<ul class="nav navbar-nav">
					<li role="presentation"><a href="SelectIntro.php" >Select</a></li>
					<li role="presentation"><a href="WhereIntro.php">Where</a></li>
					<li role="presentation"><a href="UpdateIntro.php">Update</a></li>
					<li role="presentation"><a href="InsertIntro.php">Insert</a></li>
					<li role="presentation"><a href="DeleteIntro.php">Delete</a></li>
					<li role="presentation"><a href="JoinIntro.php">Joins</a></li>
					<li role="presentation"><a href="StoredProcedureIntro.php">Stored Procedure</a></li>
				</ul>
			</div>
	</div>
</nav>



</body>
</html>
