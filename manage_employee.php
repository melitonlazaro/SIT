<html>
<head>
	<title></title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<script src="js/jquery-1.12.4.min.js"></script>
  	<script src="js/bootstrap.js"></script>

</head>
<body>
<?php include "admin_nav.php"; ?>
<br><br><br>
	<div class="container-fluid">
  		<h1><i> <span class="glyphicon glyphicon-user"></span></i> Employee Directory </h1>
  		<br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Add New Employee</button>
        <br><br>
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