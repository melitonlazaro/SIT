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
    



   
  </div> <!-- /container -->
</body>
</html>
