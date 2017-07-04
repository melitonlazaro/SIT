<html>
<head>
  <title>Barangay Clearance</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/jscookmenu.min.js"></script>
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/wb.carousel.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/npm.js"></script>
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
  <link href="css/Dashboard.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <?php include "Menu_System.php"; ?>
  <br />
  <br />
  <br />
  <div class="container-fluid">
    <div class="jumbotron jumbotron-custom"> <!-- JUMBOTRON -->
      <center>
        <h1 class="header1">BARANGAY CLEARANCE</h1>
        <!-- <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p> -->
      </center>
    </div> <!-- /JUMBOTRON -->
    <div class="row">
      <div class="col-md-4 col-md-offset-8">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go! <span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
          </span>
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /row -->
    <br />
    <table class="table table-striped table-hover">
      <tr>
        <th>Reference No.</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Middle Initial</th>
        <th>Address</th>
        <th>Purpose</th>
        <th>Date</th>
        <th>Email</th>
        <th>Status</th>
        <th>Action&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
      </tr>
      <tr>
        <?php
    if( isset($request) ){
			foreach($request as $r){
				echo '
					
													<tr>
														<td>'.$r['id'].'</td>
														<td>'.$r['employee'].'</td>
														<td>'.$r['department'].'</td>
														<td>'.$r['conflict'].'</td>
														<td>'.$r['remarks'].'</td>
														<td>'.$r['status'].'</td>
														<td>'.$r['tech'].'</td>
													</tr>';
											}
										}
										?>
								
      </tr>
    </table>
</div> <!-- /container -->
</body>
</html>
