<?php  
	session_start();
	include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<link rel="stylesheet" type="text/css" href="styles/register_style.css">
</head>
<body>
<div class="register_box">
	<img src="styles/images/contact.png" class="contact_pic">
	<h1>register here</h1>
	<form class="register_form" method="post" action="sessions.php">
		<p>Name</p>
		<input type="text" name="R_name" placeholder="Enter your name" required>
		<p>Email</p>
		<input type="Email" name="R_email" placeholder="Enter your Email" required>
		<p>gender <select class="select" name="R_gender" required><option>male</option><option>female</option></select></p><br>
		<p> </p>
		<p>Role <select class="select" name="R_role" required><option>Retailer</option><option>Customer</option></select></p></br>
		<p> </p>
		<p>date of birth</p>
		<input type="date" name="R_DOB" placeholder="Enter date here"  required>
		<p>mobile <input type="number" name="R_mobile" required></p>
		<p>Username</p>
		<input type="text" name="R_uname" placeholder="user name" required><br>
		<p>Password</p>
		<input type="password" name="R_pword" placeholder="password" required><br>
		<input type="submit" name="R_submit" value="register">
		<a href="Login.php">Already have an account?</a>
	</form> 
</div>
</body>
</html>