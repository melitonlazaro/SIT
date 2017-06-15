<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
 <link  href="<?php echo base_url();?>/public/css/w3.css" rel="stylesheet" type= "text/css"/>
<head>
<style>

h6 {
    color: red;
}
</style>
</head>

<body>
<?php if($this->session->flashdata('registered')):?>
<p><?php echo $this->session->flashdata('registered');?></p>
<?php endif;?>
<?php 
if($this->session->flashdata('correct')):
?>
<p><?php echo $this->session->flashdata('correct');?></p>
<?php endif;?>	

<?php 
if($this->session->flashdata('error')):
?>
<p><?php echo $this->session->flashdata('error');?></p>
<?php endif;?>	


<img src = "<?php echo base_url();?>/public/images/images.jpg">
<br>
<div class="w3-bar w3-green">
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">Home</a>
</div>
<div class="w3-threequarter">

	<br>
	eqwheqwuiehiqw heiqw heiqwh ieqwhi ehqwi hewqi heiqw hiewqhie qwhie hiqeh iqwh eiwq
</div>

<div class="w3-quarter">
		
			<br>

			<center>
			<div class="w3-panel w3-border-green w3-border">
			
			
			<h3>Login</h3>
			

			
			<?php echo form_open('Welcome/login'); ?>
			<br>
			<input type="text" name="username" placeholder="Username">

			<br>
			<br>
			<input type="password" name="password" placeholder="Password">

			<br><br>
			<input type="submit" value="Login" class="w3-button w3-ripple w3-hover-green">
			<h6><?php echo validation_errors(); ?></h6>
			</form>
			<a href="<?php echo site_url();?>/Welcome/register" class="w3-right">register</a>
			</div>



			</center>
		</div>


</body>
</html>