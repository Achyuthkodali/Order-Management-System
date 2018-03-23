<?php 
	session_start(); 
	error_reporting(0);
	include 'connect.php';
	if ($_SESSION['Admin'] == 'Admin' ) {
		header('location:'.'admin_dashboard.php');
	}elseif ($_SESSION['SubAdmin'] == 'SubAdmin') {
		header('location:'.'Subadmin_dashboard.php');
	}elseif ($_SESSION['Retailer'] == 'Retailer') {
		header('location:'.'additems.php');
	}elseif ($_SESSION['Customer'] == 'Customer') {
		header('location:'.'products.php');
	}else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="styles/login_style1.css">
</head>
<body background="styles/images/login_bg.jpg">
<div class="login_box">
	<img src="styles/images/contact.png" class="contact_pic">
	<h1>Login Here</h1>
	<form class="Login_form" method="post" action="sessions.php">
		<p>Username</p>
		<input type="text" name="L_uname" placeholder="user name" required><br>
		<p>Password</p>
		<input type="password" name="L_pword" placeholder="password" required><br>
		<input type="submit" name="L_submit" value="Login">
		<label id="warning"></label>
		<a href="#"><strong>Forgot password?</strong></a>  <br> <a href="Register.php"><strong> Register now</strong></a>
	</form> 
</div>
</body>
</html>
<?php
}
?>