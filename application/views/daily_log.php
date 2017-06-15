<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
 <link  href="<?php echo base_url();?>/public/css/w3.css" rel="stylesheet" type= "text/css"/>
<link href="<?php echo base_url();?>/public/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<img src = "<?php echo base_url();?>/public/images/images.jpg">
<br><br>
<div class="w3-bar w3-green">
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a class="w3-right">You are signed in as <?php echo $this->session->userdata('username');?> </a>
</div>
<br><br>

<h2> IT Department Daily Log</h2><br>
<table class="table">

<thead>
	<tr>
		<th>ID</th>
		<th>Employee Name</th>
		<th>Issues</th>
		<th>Remarks</th>
		<th>Status</th>
		<th>Tech</th>
	</tr>

</thead>
<tbody>
<?php
foreach($log as $logs):

	echo "<tr>";
	echo "<td>$logs->id</td>";
	echo "<td>$logs->employee</td>";
	echo "<td>$logs->conflict</td>";
	echo "<td>$logs->remarks</td>";
	echo "<td>$logs->status</td>";
	echo "<td>$logs->tech</td>";
	echo "<td>$logs->date</td>";
	echo "</tr>";

?>
<?php endforeach;?>





</tbody>
  </table>


</table>