<script type="text/javascript" src="js/jquery3.1.js"></script>
<script type="text/javascript">
	$('#next').click(function(){
		$('.dashboard_table').load(' .dashboard_table');
	});
	$('#previous').click(function(){
		var session = <?php echo $_SESSION['id']/3; ?>;
		$('.dashboard_table').load(' admin_dashboard.php?id=session');
	});
</script>
<?php
	session_start();
	include 'connect.php';
	if ($_SESSION['Admin'] == 'Admin' || $_SESSION['SubAdmin'] == 'SubAdmin') {
		
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="styles/dashboard_style1.css">
</head>
<body>
	<header>
		<div class="header_div">
			<div id="logo_div"></div>
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
		<section>
			<div id="itemsmenu">
				<div id="users_div">
					<h2>Users</h2>
					<h3 id="users_div_h3">here are the users</h3>
			  </div>
			  <div>
			  	<table width="100%" class="dashboard_table">
    				<tbody>
					    <tr class="dashboard_tablerow">
					      <th>Name</th>
					      <th>Username</th>
					      <th>password</th>
					      <th>Email</th>
					      <th>Gender</th>
					      <th>date of birth</th>
					      <th>mobile</th>
					      <th>status</th>
					      <th>role</th>
				        </tr>
					    <tr>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					      <td class="align">
					      	<select>
					      		<option>online</option>
					      		<option>Suspend</option>
					      		<option>Delete</option>
					      	</select>
					      </td>
					      <td class="align">
					      	<select>
					      		<option>Subadmin</option>
					      		<option>Consumer</option>
					      		<option>Retailer</option>
					      		<option>Customer</option>
					      	</select>
					      </td>
				        </tr>
					    <tr>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					      <td>&nbsp;</td>
					      <td class="align">
					      	<select>
					      		<option>online</option>
					      		<option>Suspend</option>
					      		<option>Delete</option>
					      	</select>
					      </td>
					      <td class="align">
					      	<select>
					      		<option>Subadmin</option>
					      		<option>Consumer</option>
					      		<option>Retailer</option>
					      		<option>Customer</option>
					      	</select>
					      </td>
				        </tr>
    				</tbody>
		  		</table>
			  </div>
			  <div class="add_user">
			  	<h2>Add user</h2>
			  	<table width="100%" class="add_user_tab">
			  		<tr class="add_user_table">
			  			<th>Username</th>
			  			<th>Password</th>
			  			<th>Name</th>
			  			<th>Email</th>
			  			<th>Mobile</th>
			  			<th>Role</th>
			  			<th>Status</th>
			  		</tr>
			  		<tr>
			  			<td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td>&nbsp;</td>
					    <td class="align">
					    	<select>
					    		<option>Subadmin</option>
					    		<option>Consumer</option>
					    		<option>Retailer</option>
					    		<option>Customer</option>
					    	</select>
					    </td>
					    <td class="align">
					    	<select>
					    		<option>online</option>
					    		<option>Suspend</option>
					    		<option>Delete</option>
					    	</select>
					    </td>
			  		</tr>
			  	</table>
			  	<div class="modify_button">
		  			<button style="color: white;"><strong>Add user</strong></button>
		  		</div>
			  </div>
		  </div>
		</section>
	<footer>
	</footer>
</body>
</html>
<?php
	}else{
		header('location:products.php');
	}
?>