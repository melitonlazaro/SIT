
<!DOCTYPE html>
<html>
	<head>
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
   	
   		<link href="css/Dashboard.css" rel="stylesheet">
   	<style type="text/css">
   	div#myDIV 
   	{
    position:fixed;
    width:20%;
    height:4%;
    right:0%;
    bottom:2%;
    z-index: 10;
	}
	#labels
	{
		font-size: 20px;
	}
	
	#jumbotron
	{

		background-color:  #54a51c;
		color:white;
		min-height: 400px;
		
	}
	#jumbobutton
	{
		position:absolute;
		bottom:15%;
		right:50%;

	}
	#jumbobutton1
	{
		position:absolute;
		bottom:15%;
		right:48%;
	}
	
	h1#title
	{
		font-family: Bebas Neue Regular;
		font-size: 50px;
	}
	.card {
	    /* Add shadows to create the "card" effect */
	    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
	    transition: 0.3s;
	    border: 1px solid #56a61e;
	}
	/* On mouse-over, add a deeper shadow */
	.card:hover {
	    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	}

	/* Add some padding inside the card container */
	
	.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 5px; /* 5px rounded corners */
	}
	#panel-heading
	{
		background-color: #54a51c;
		color:white;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
	}

	#news_title
        {
            width: auto;
            white-space: nowrap;
            overflow: hidden;
            text-overflow:ellipsis;
        }
	#news_lead
		{
			width: auto;
			height: auto;
			white-space: nowrap;
			overflow: hidden;
			text-overflow:ellipsis;
		}
	#view_more
	{
		color: white;
	}
   	</style>	

	</head>
	<body>
			 <!-- 92CD00	FFCF79	E5E4D7	2C6700 -->
		
		<div id="myDIV">
			<a href="skype:live:jcastro_379 live:acahapay?chat">
				<span class="label label-info pull-right" id="labels"><img src="skype-icon.png" width="30px" height="30px">&nbspChat with us!</span>
			</a>
		</div>
		
		<?php 
		include "header.php"; 

		?>
		<br><br>


	<div class="row" id="row">
		<div class="col-xs-6 " >
			<div class="container-fluid">	
				<div class="jumbotron" id="jumbotron">
				  	
				   			<h1 id="title">Ticketing System </h1> 
				   			<p>Tracking issues made easy! IT Department's new Ticketing System is now made to ensure faster responses on Technical Concerns</p>
						    <a href="bc.php?action=ticketpage"><button class="btn btn-primary btn-lg" id="jumbobutton">Add Ticket</button> </a>
				  	
				</div>
			</div>
		</div>
		<div class="col-xs-6 ">
			<div class="container-fluid" id="jumboright">
				<div class="jumbotron" id="jumbotron">
			 		

					    <h1 id="title">Employee Directory </h1> 
					    <p>Search and view employees information.</p>
					   <a href="bc.php?action=ergoemployee"><button class="btn btn-primary btn-lg " id="jumbobutton1">Learn More</button></a>
					
				</div>
			</div>
		</div>
	</div>



		<h1>News & Announcements</h1>
		<br>
	<div class="container">	
		<div class="row">
						<?php 
						
	  			foreach ($news as $r) 
				{
					echo '
							<div class="col-xs-3">
								<div class="panel panel-success " > 
									<div class="panel-heading" >
		   								 <h3 class="panel-title" id="news_title">'.$r["title"].'</h3>
		  							</div>
		  							
									<div class="panel-body">
										<p id="news_lead">'.$r["lead"].'</p>
									</div>
									<div class="panel-footer" >
										'.$r["author"].' '.$r["date_published"].'
									</div>
								</div>
							</div>
						 ';
				}
				 ?>
		
		</div>
	</div>	
		<button class="btn btn-info pull-right"><a href="bc.php?action=news_list" id="view_more">View More </a></button>







		<br><br><br><br><br>




	</body>
</html>