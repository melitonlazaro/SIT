<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en">
 <link  href="<?php echo base_url();?>/public/css/w3.css" rel="stylesheet" type= "text/css"/>
<link href="<?php echo base_url();?>/public/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<img src = "<?php echo base_url();?>/public/images/images.jpg">
<br>
<div class="w3-bar w3-green">
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a class="w3-right">You are signed in as <?php echo $this->session->userdata('username');?> </a>
</div>


<?php 
	echo form_open('Welcome/addlog');
?>
<div class="w3-left">
<h2>Employee Name</h2>
<input type="text" name="employee">

<h2>Department</h2>
<select name="department">
	<option value="1">Department1</option>
	<option value="2">Department2</option>
	<option value="3">Department3</option>
	<option value="4">Department4</option>
	<option value="5">Department5</option>

</select>

<h2>Issues</h2>
<input type="text" name="conflict">

<h2>Status</h2>
<select name="status">
	<option value="Complete">Complete</option>
	<option value="Pending">Pending</option>
	<option value="Incomplete">Incomplete</option>
</select>

<h2>Remarks</h2>
<input type="text" name="remarks">

<h2>Tech</h2>
<select name="tech">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
</select>
<br><br>
<input type="submit" value="Submit">

</form>
</div>










 </html>
