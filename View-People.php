<html>
<head>
  
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
  <div class="container">
    

    <div class="row">
      <div class="col-md-4 ">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addData"><span class="glyphicon glyphicon-plus"> </span></button>
        <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="addLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="addLabel"></h4>
              </div>
              <form action="bc.php?action=addissue" method="POST">
              <div class="modal-body">
                
                <div class="form-group">
                  <label for="employee">Employee Name</label>
                  <input type="text" class="form-control" id="employee" placeholder="employee" name="employee">
                </div>
				<div class="form-group">
                  <label for="conflict">Issue</label>
                  <input type="text" class="form-control" id="conflict" placeholder="conflict" name="conflict">
                </div>
				<div class="form-group">
                  <label for="remarks">Remarks</label>
                  <input type="text" class="form-control" id="remarks" placeholder="remarks" name="remarks">
                </div>
				<div class="form-group">
                  <label for="tech">Technician</label>
                  <input type="text" class="form-control" id="tech" placeholder="tech" name="tech">
                </div>
   

				
				<div class="row">
                  <div class="col-xs-5">
                    <div class="form-group">
                      <select class="selectpicker form-control"  name="department" placeholder="">
                        <optgroup label="Department"></optgroup>
                        <option></option>
                        <option>Department1</option>
                        <option>Department2</option>
                        <option>Department3</option>
                        <option>Department4</option>
                      </select>
                    </div>
                  </div>
                </div>
				
                <div class="row">
                  <div class="col-xs-5">
                    <div class="form-group">
                      <select class="selectpicker form-control"  name="status" >
                        <optgroup label="Status"></optgroup>
                        <option>Complete</option>
                        <option>Pending</option>
                        <option>Incomplete</option>
                      </select>
                    </div>
                  </div>
                </div>
				
              </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" onclick="" class="btn btn-primary" value="submit" >Save</button>
            </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-md-offset-4">
        <div class="input-group">
          <input type="text" class="form-control" name="search" id="search" placeholder="Search">
         
          <script>
          $(document).ready(function(){
            load_data();

            function load_data(query)
            {
              $.ajax({
                url:"fetch.php",
                method:"POST",
                data:{query:query},

                success:function(data)
                {
                  $('#result').html(data);
                }
                });
            }
          $('#search').keyup(function(){
            var search = $(this).val();
            if(search!= '')
            {
              load_data(search);
            }
            else
            {
              load_data();
            }
          });
          });

          </script>


        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /row -->
    <br />
    <div id="result"></div>
    



    <table class="table table-striped table-hover">
      <tr>
        <th>ID No.</th>
        <th>Employee Name</th>
        <th>Department</th>
        <th>Issue</th>
        <th>Remarks</th>
        <th>Status</th>
        <th>Tech</th>
        <th>Date</th>
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
                <td>'.$r['date'].'</td>
    						
    						
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
        									<input type="hidden" class="form-control" id="ID-'.$r['id'].'" value="'.$r['id'].'" name="ID" >
        										<div class="form-group">
        										<label for="employee">Employee</label>
        											<input type="text" class="form-control" id="employee-'.$r['id'].'" value="'.$r['employee'].'" name="employee" disabled>
        										</div>
        										
												<br />
												

                            <div class="form-group">
                            <label for="department">Department</label>
                              <input type="text" class="form-control" id="department-'.$r['id'].'" value="'.$r['department'].'" name="department" disabled>
                            </div>

  												  <div class="form-group">
                              <label for="conflict">Issue</label>
                                <input type="text" class="form-control" id="conflict-'.$r['id'].'" value="'.$r['conflict'].'" name="conflict" disabled>
                              </div>

        										<div class="form-group">
                              <label for="remarks">Remarks</label>
                                <input type="text" class="form-control" id="remarks-'.$r['id'].'" value="'.$r['remarks'].'" name="remarks">
                              </div>

                              <div class="form-group">
                              <label for="status">Status</label>
                                <input type="text" class="form-control" id="status-'.$r['id'].'" value="'.$r['status'].'" name="status">
                              </div>

        								  </div>
        								  <div class="modal-footer">
        									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        									<button type="submit" onclick="" class="btn btn-primary" value="update" name="update">Save changes</button>
        								  </div>
        							  </form>
        							</div>
        						  </div>
        						</div>
                </div></td>
    					</tr>';
    			}
    		}
    		?>


        <!-- <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Print"><span class="glyphicon glyphicon-print" aria-hidden="true"></button>
        <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><span class="glyphicon glyphicon-remove" aria-hidden="true"></button> -->
      </tr>
    </table>
  </div> <!-- /container -->
</body>
</html>
