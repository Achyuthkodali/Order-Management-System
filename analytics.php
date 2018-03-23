<?php  
	session_start();
	include 'connect.php';
	if ($_SESSION['Admin'] == 'Admin'|| $_SESSION['SubAdmin'] == 'SubAdmin') {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Analysis page</title>
	<link rel="stylesheet" type="text/css" href="styles/analytics.css">
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
		<div class="Analysis_pane" style="">
			<div class="content_pane">
				<h2>This weeks top selling products</h2>
			</div>
			<table class="Analysis_table" style="margin-left: 10px;" width="98%">
				<tr class="Analysis_tablerow">
					<th>Sr.no</th>
					<th>Product ID</th>
					<th>Retailer</th>
					<th>Sales count</th>
				</tr>
				<tr>
					<td>q</td>
					<td>q</td>
					<td>q</td>
					<td>q</td>
				</tr>
				<tr>
					<td>q</td>
					<td>q</td>
					<td>q</td>
					<td>q</td>
				</tr>
				<tr>
					<td>q</td>
					<td>q</td>
					<td>q</td>
					<td>q</td>
				</tr>
				<tr>
					<td>q</td>
					<td>q</td>
					<td>q</td>
					<td>q</td>
				</tr>
				<tr>
					<td>q</td>
					<td>q</td>
					<td>q</td>
					<td>q</td>
				</tr>
			</table>
			<div class="content_pane">
				<h2>This weeks top Retailers</h2>
			</div>
			<table class="Analysis_table" style="margin-left: 10px;" width="98%">
				<tr class="Analysis_tablerow">
					<th>Sr.no</th>
					<th>Retailer ID</th>
					<th>Retailer name</th>
					<th>Sales count</th>
					<th>Total amount</th>
				</tr>
				<tr>
					<td>q</td>
					<td>q</td>
					<td>q</td>
					<td>q</td>
					<td>q</td>
				</tr>
				<tr>
					<td>q</td>
					<td>q</td>
					<td>q</td>
					<td>q</td>
					<td>q</td>
				</tr>
				<tr>
					<td>q</td>
					<td>q</td>
					<td>q</td>
					<td>q</td>
					<td>q</td>
				</tr>
				<tr>
					<td>q</td>
					<td>q</td>
					<td>q</td>
					<td>q</td>
					<td>q</td>
				</tr>
				<tr>
					<td>q</td>
					<td>q</td>
					<td>q</td>
					<td>q</td>
					<td>q</td>
				</tr>
			</table>
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