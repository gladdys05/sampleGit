<html>
	<head></head>
	
<body>
	<?php $this->load->helper('form'); ?>
	<?php echo form_open('welcome/process'); ?>
	
	Email </br><input type = "text" name="email" /></br></br>
	Password </br><input type= "password" name="password" /></br></br>
	Submit: <input type="submit" name="submit" /> </br></br>
	
	<?php echo form_close() ?>
	
	<?php echo validation_errors(); ?>
	
	<?php $this->load->helper('url'); ?>
	<?php echo
		anchor('welcome/about','About');
	?>
	
</body>

</html>

