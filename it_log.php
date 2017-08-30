 <!DOCTYPE html>  
 <html>  
      <head>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/pagination.js"></script>

      </head>  
      <body>  
      	<?php include "admin_nav.php"; ?>
           <br><br> <br>
           


           <div class="container">  
           
                    		<h1>I.T Daily Log</h1>
                    		<br>

                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Add Ticket</button>
                             <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                               <div class="modal-dialog modal-lg" role="document">
                                 <div class="modal-content">
                                   <div class="modal-header">
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                     <h4 class="modal-title" id="addLabel">Add IT Log</h4>
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
                                          <label for="tech">Tech</label>
                                          <input type="text" class="form-control" id="tech" placeholder="tech" name="tech">
                                       </div>
                       
                                       <div class="row">
                                             <div class="col-xs-5">
                                                <div class="form-group">
                                                   <label for="department">Department</label>
                                                <select class="selectpicker form-control" id="department" name="department" placeholder="">
                                                   <optgroup label="Department"></optgroup>
                                                   <option></option>
                                                   <option>IT Department</option>
                                                   <option>Marketing</option>
                                                   <option>Sales</option>
                                                   <option>Customer Service</option>
                                                   <option>Human Resource</option>
                                                   <option>Treasury</option>
                                                </select>
                                               </div>
                                             </div>
                                       </div>
                       
                                       <div class="row">
                                         <div class="col-xs-5">
                                           <div class="form-group">
                                             <label for="status">Status</label>
                                             <select class="selectpicker form-control" id="status" name="status" >
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
                             <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                             <button type="submit" onclick="" class="btn btn-primary pull-left" value="submit" >Save</button>
                           </div>
                        </form>
                     </div>
                  </div>
                </div>

                <br><br><br>
           	<div class="form-inline">

               <form method="POST" action="bc.php?action=search_log">
                  <div class="pull-right">
                     <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="Search">
                     </div>
                     <div class="form-group">
                        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                     </div>
                  </div>   
               </form>

               <form method="POST" action="bc.php?action=logsort">
                  <div class="form-group">
                     <label for="from_sort">From:</label>
                     <input type="date" name="fromsort" class="form-control" id="from_sort" value="<?php echo isset($_POST["fromsort"]) ? $_POST["fromsort"] : '';?>">

                  </div>
                  <div class="form-group">
                        <label for="tosort">TO:</label>
                        <input type="date" class="form-control" name="tosort" id="tosort" value="<?php echo isset($_POST["tosort"]) ? $_POST["tosort"] : '';?>">
                  </div>
                  <div class="form-group">
                        <button type="submit" name="sort" class="btn btn-default"><span class="glyphicon glyphicon-calendar"></button>
                  </div>
               </form>
         
        
            </div>


            <br> <br>	<!-- This div is responsible for Daily Log display -->
               <div class="table-responsive" id="pagination_data">  
	            </div>  
           </div>  
      </body>  
 </html>  

