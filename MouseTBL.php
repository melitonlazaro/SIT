<html>
	<head>
		<title>Inventory</title>
		
			 <meta charset="utf-8">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
		  <script src="js/jscookmenu.min.js"></script>
		  <script src="js/jquery-1.12.4.min.js"></script>
		  <script src="js/wb.carousel.min.js"></script>
		  <script src="js/bootstrap.js"></script>
		  <script src="js/npm.js"></script>
		  
		  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

			<!-- Bootstrap -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<script src="js/bootstrap.min.js"></script>
			<style>
			.navigatebar{
					display:inline-block;
					float:left;
					height:100%;
					width:16%;
				}
				
				.table{
					list-style-type:none;
					
					width:200px;
					background-color:#f1f1f1;
					padding:25px 0px;
					height:100%;
				}
				
				.listed-items{
					width:100%;
					aign-left:25%;
				}
				.listed-items a{
					width:100%;
					display:block;
					color:#000;
					padding:8px 16px;
					text-decoration:none;
				}
				
				.listed-items a:hover{
					background-color:#555;
					color:white;
					width:100%;
				}
				
				.table{
					
					float:right;
					background-color:none;
					display:fixed;
				}
			
			</style>
			
			
	</head>
	
		<body>
			
			<?php include "Menu_System.php";?>
		
				
					<br /><br />
				
					<div class="row">
						<div class="col-md-4">
							<ul class="table">
								<div class="listed-items">
									<li><a href="bc.php?action=mousetbl">Mouse</a></li>
									<li ><a href="">HUB</a></li>
									<li ><a href="">Ink</a></li>
									<li ><a href="">Keyboard</a></li>
									<li ><a href="">Monitor</a></li>
									<li ><a href="">Printer</a></li>
									<li ><a href="">Projector</a></li>
									<li><a href="">Toner</a></li>
								</div>
							</ul>
						</div>
						
						<div class="col-md-8">
							<table class="table table-striped table-hover">
								  <tr>
									<th>ID No.</th>
									<th>Employee Name</th>
									<th>Department</th>
									<th>Issue</th>
									<th>Remarks</th>
									<th>Status</th>
									<th>Tech</th>
									<th>Action</th>
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
                <td>
                <div class="btn-group" role="group" aria-label="...">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-'.$r['id'].'" data-placement="top" title="Edit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></button>
        					<div class="modal fade" id="edit-'.$r['id'].'" tabindex="-1" role="dialog" aria-labelledby="editLabel" >
        						  <div class="modal-dialog" role="document">
        							<div class="modal-content">
        							  <div class="modal-header">
        								<button type="button" class="close" data-dismiss="modals" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        								<h4 class="modal-title" id="editLabel-'.$r['id'].'">Edit Data</h4>
        							  </div>
        							  <form action="bc.php?action=editissue" method="POST" >
        								  <div class="modal-body">
        									<input type="hidden" class="form-control" id="ID-'.$r['id'].'" value="'.$r['id'].'" name="id" >
        										<div class="form-group">
        										<label for="employee">Employee Name</label>
        											<input type="text" class="form-control" id="employee-'.$r['id'].'" value="'.$r['employee'].'" name="employee" disabled>
        										</div>
												
												<div class="form-group">
        										<label for="department">Department</label>
        											<input type="text" class="form-control" id="department-'.$r['id'].'" value="'.$r['department'].'" name="department" disabled>
        										</div>
												
												<div class="form-group">
        										<label for="conflict">Issue</label>
        											<input type="text" class="form-control" id="conflict-'.$r['id'].'" value="'.$r['conflict'].'" name="conflict">
        										</div>
												
												<div class="form-group">
        										<label for="remarks">Remarks</label>
        											<input type="text" class="form-control" id="remarks-'.$r['id'].'" value="'.$r['remarks'].'" name="remarks">
        										</div>
												
												<div class="form-group">
        										<label for="status">Status</label>
        											<input type="text" class="form-control" id="status-'.$r['id'].'" value="'.$r['status'].'" name="status">
        										</div>
												
												<div class="form-group">
        										<label for="tech">Technician</label>
        											<input type="text" class="form-control" id="tech-'.$r['id'].'" value="'.$r['tech'].'" name="tech">
        										</div>
        										

        								  </div>
        								  <div class="modal-footer">
        									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        									<button type="submit" onclick="" class="btn btn-primary" value="update" name="update">Save changes</button>
        								  </div>
        							  </form>
        							</div>
        						  </div>
        					`	</div>
                </div></td>
    					</tr>';
    			}
    		}
    		?>
										


								   </tr>
							</table>
						
						</div>
					
					</div>
					
					
					
				
				
		</body>
</html>