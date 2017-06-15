<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
 <link  href="<?php echo base_url();?>/public/css/w3.css" rel="stylesheet" type= "text/css"/>
<head>
<style type="text/css">
.container
{
	width: 500px;
	height: 500px;
	border: 1px solid green;
}


</style>
</head>
<body>

<div class="w3-container">
<?php 
if($this->session->flashdata('username_check')):
?>
<p><?php echo $this->session->flashdata('username_check');?></p>
<?php endif;?>	


<img src = "<?php echo base_url();?>/public/images/images.jpg">
<br>
<div class="w3-bar w3-green">
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">Home</a>
</div>
<br><br>
<center>
<div class="container">
<h3> Register Account </h3>

<?php echo validation_errors();?>
<?php echo form_open('Welcome/register_process'); ?>
<input type="text" name="first_name" placeholder="First Name"> <br>
<input type="text" name="last_name" placeholder="Last Name"><br>
<input type="text" name="username" placeholder="Username"><br>
<input type="password" name="password" placeholder="Password"><br>
<input type="password" name="confirm_password" placeholder="Confirm Password"><br>
<br>
<input type="submit" value="Register Account">
</form>
</div>
</center>
</div>

</body>

</html>