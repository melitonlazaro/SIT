<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "ojt");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM daily_log 
  WHERE employee LIKE '%".$search."%'
  OR department LIKE '%".$search."%' 
  OR conflict LIKE '%".$search."%' 
  OR remarks LIKE '%".$search."%' 
  OR status LIKE '%".$search."%'
  OR tech LIKE '%".$search."%'
  OR date LIKE '%".$search."%'
  LIMIT 10";
}
else
{
 $query = "
  SELECT * FROM daily_log ORDER BY id LIMIT 10
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
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
  
      </tr>
      
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["id"].'</td>
    <td>'.$row["employee"].'</td>
    <td>'.$row["department"].'</td>
    <td>'.$row["conflict"].'</td>
    <td>'.$row["remarks"].'</td>
    <td>'.$row["status"].'</td>
    <td>'.$row["tech"].'</td>
    <td>'.$row["date"].'</td>
    
   </tr>
  ';
 }
 echo $output;
 echo '</table>';
}

else
{
 echo 'Data Not Found';
}

?>