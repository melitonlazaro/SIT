<html>
<head>
	<title></title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/jscookmenu.min.js"></script>
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/wb.carousel.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/npm.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<?php include "admin_nav.php"; ?>
<br><br><br>
	<div class="container-fluid">
  		<h1><i> <span class="glyphicon glyphicon-user"></span></i> Employee Directory </h1>
  		<br>
         <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".Add_new_employee">Add New Employee</button>

        <br><br>

       <div class="modal fade Add_new_employee" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="addLabel">Add IT Log</h4>
              </div>
              <div class="modal-body">
                <form action="bc.php?action=add_new_employee_record" method="POST">
                  <div class="form-group">
                    <label for="first_name">First name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name">
                  </div>
                   <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name">
                  </div>
                   <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" class="form-control" name="department" id="department">
                  </div>
                   <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" class="form-control" name="location" id="location">
                  </div>
                   <div class="form-group">
                    <label for="directory">Local Directory</label>
                    <input type="text" class="form-control" name="directory" id="directory">
                  </div>
                   <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email">
                  </div>
                   <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" name="status" id="status">
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Add new employee Record">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="table-responsive" id="pagination_data">
        	<!-- Div responsible for pagination of Employee Directory -->
        </div>
	</div>

</body>
</html>
<script type="text/javascript">

 $(document).ready(function(){  
      load_data();  
      function load_data(page)  
      {  
           $.ajax({  
                url:"pagination_admin_directory.php",  
                method:"POST",  
                data:{page:page},  
                success:function(data){  
                     $('#pagination_data').html(data);  
                }  
           })  
      }  
      $(document).on('click', '.pagination_link', function(){  
           var page = $(this).attr("id");  
           load_data(page);  
      });  
 });  

</script>