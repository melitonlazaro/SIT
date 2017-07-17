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

  <br><br><br>
<table class="table table-striped table-hover">
        <tr>
         
          <th >Name</th>
          <th>Department</th>
          <th>Issue</th>
          <th>Date</th>
          <th>Time</th>
          <th>Action</th>
        
        </tr>
        <tr>
        <?php
        if( isset($request) ){
            foreach($request as $r){
              echo '
                <tr>
               
                  <td>'.$r['name'].'</td>
                  <td>'.$r['department'].'</td>
                  <td>'.$r['concern'].'</td>
                  <td>'.$r['date'].'</td>
                  <td>'.$r['time'].'</td>
                  
            <td>
            <div class="btn-group" role="group" aria-label="...">




            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#confirmmodal-'.$r['ticket_id'].'"><span class="glyphicon glyphicon-ok"></button>
              
            <div id="confirmmodal-'.$r['ticket_id'].'" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="editLabel">
                <div class="modal-admin" role="document">
                    <div class="modal-content" style="width:70%; margin:auto;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" id="editLabel-'.$r['ticket_id'].'">Confirm Issue</h4>
                        </div>
                          
                          <form method="POST" action="bc.php?action=confirm_issue"> 
                      <div class="modal-header">
                            <div class="form-inline">
                              <div class="form-group">
                                <label for="remarks">Remarks</label>
                                <input type="text" class="form-control" name="remarks" id="remarks">
                                </label
                              </div>
                              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                              <div class="form-group">
                              <label for="status">Status</label>

                                <select class="selectpicker form-control"  name="status" id="status" >
                                    <optgroup label="Status"></optgroup>
                                    <option>Complete</option>
                                    <option>Pending</option>
                                    <option>Incomplete</option>
                                </select>
                               
                              </div>
                              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                              <div class="form-group">
                              <label for="tech">Tech</label>
                                <select class="selectpicker form-control"  name="tech" id="tech">
                                    <optgroup label="Tech"></optgroup>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                              </div>

                            </div>
                      </div>

                      <div class="modal-body">
                           
                           
                                <input type="hidden" value="'.$r['ticket_id'].'" name="id" id="id-'.$r['ticket_id'].'">
                                <div class="form-group">
                                    <label for="employee">Employee Name</label>
                                     <input type="text" class="form-control" id="employee-'.$r['ticket_id'].'" value="'.$r['name'].'" name="name">
                                </div>

                                <div class="form-group">
                                <label for="department">Department</label>
                                <input type="text" class="form-control" value="'.$r['department'].'" name="department" id="department-'.$r['ticket_id'].'">
                                </div>

                                <div class="form-group">
                                <label for="concern">Issue</label>
                                <input type="text" class="form-control" value="'.$r['concern'].'" name="concern" id="concern-'.$r['ticket_id'].'">
                                </div>

                                <div class="form-group">
                                <label for="date">Date</label>
                                <input type="text" class="form-control" value="'.$r['date'].'" name="datelog" id="date-'.$r['ticket_id'].'" readonly>
                                </div>

                                <div class="form-group">
                                <label for="time">Time</label>
                                <input type="text" class="form-control" value="'.$r['time'].'" name="timelog" time="time-'.$r['ticket_id'].'" readonly>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-info" value="confirm" name="update">Confirm</button>
                            </form>
                        </div>
                        
                    </div>
               </div>   
                    

            </div>
            </td>

                </tr>';
            }
          }
          ?>

        </tr>
      </table>






</body></html>