<?php  
	session_start();
	include 'connect.php';
	if ($_SESSION['Admin'] == 'Admin' || $_SESSION['SubAdmin'] == 'SubAdmin') {
?>


<!DOCTYPE html>
<html>
<head>
	<title>Orders</title>
	<link rel="stylesheet" type="text/css" href="styles/orders1.css">
</head>
<body>
	<header>
		<div id="header_div">
			<div id="logo_div">
				
			</div>
			<div id="menu_div" >
				<a href="#">Home</a>
				<a href="#">About</a>
				<a href="#">contact</a>
				<a href="login.php">login</a>
				<a href="Register.php">Register</a>
				<a href="logout.php">logout</a>
			</div>
		</div>
	</header>
		<div id="left">
			<aside id="left_aside">
				<ul id="slide">
					<div id="left_top"></div>
				</ul>
			</aside>
		</div>
		<div class="orders_div">
			<h2>All Orders</h2>
			<h4>Here are the orders</h4>
			<div class="orders_div_list">
				<h2 style="text-align: left; margin-left: 15px;">List</h2>
				<div class="order_container">
					<p class="orders_name"><strong>Order no 1</strong></p>
					<p class="orders_name" style="text-align: center; margin-left: 15px;"><strong>Date: </strong></p>
					<p class="orders_name" style="text-align: left;"><strong>Name:</strong></p>
					<p class="orders_name" style="text-align: left;"><strong>Contact:</strong></p>
					<p class="orders_name" style="text-align: left;"><strong>Email:</strong></p>
					<p class="orders_name" style="text-align: left;"><strong>Quantity:</strong></p>
					<p class="orders_name" style="text-align: left;"><strong>Price:</strong></p>
				</div>
			</div>
		</div>
	<div class="footer">
		<h3>Copyrights @ 2018 </h3>
	</div>
</body>
</html>
<?php
	}else{
		header('location:products.php');
	}
?>