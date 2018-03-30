 <?php
	session_start();
	include 'connect.php';
	if ($_SESSION['Admin'] == 'Admin') {
		if(isset($_POST['submit1'])||isset($_POST['submit2'])||isset($_POST['submit3'])||isset($_POST['submit4'])){

			if(isset($_POST['submit1'])){
				$a = '1';
			}elseif (isset($_POST['submit2'])) {
				$a = '2';
			}elseif (isset($_POST['submit3'])) {
				$a = '3';
			}

			$status = $_POST['status'.$a];
			$role = $_POST['role'.$a];
			$username = $_POST['username'.$a];


			$role = stripcslashes($role);
			$status = stripcslashes($status);
			$username = stripcslashes($username);


			$status = mysqli_real_escape_string($con,$status);
			$role = mysqli_real_escape_string($con,$role);
			$username = mysqli_real_escape_string($con,$username);


			switch ($role) {
				case 'Subadmin':
					$role = 2;
					break;
				case 'Retailer':
					$role = 3;
					break;
				case 'Customer':
					$role = 4;
					break;
				default:
					
					break;
			}


			if ($status == "Online") {
				$status = 1;
			}elseif ($status == "Suspend") {
				$status = 2;
			}else $status = 3;

			$query = mysqli_query($con,"update users set role=$role, status=$status where username='$username'");
		}
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
	
</script>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="styles/dashboard_style.css">
</head>
<body>
	<header>
		<div class="header_div">
			<div id="logo_div"></div>
			<div id="menu_div" >
				<a href="products.php">Home</a>
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
			  <div class="dashboard">
			  	<div class="dashboard_table">
			  	<table width="100%" class="dashboard_tab">
    				<tbody>
					    <tr class="dashboard_tablerow">
					      <th>Name</th>
					      <th>Username</th>
					      <th>Email</th>
					      <th>Gender</th>
					      <th>date of birth</th>
					      <th>mobile</th>
					      <th>status</th>
					      <th>role</th>
					      <th></th>
				        </tr>

				        <form name="select_form1" action="admin_dashboard.php" method="post">		        		
					    <tr>
					      <?php
					      		$query = mysqli_query($con, "select * from users where id=".$_SESSION['id']++.""); 
								$fetch = mysqli_fetch_array($query); ?>
					      <td><?php echo $fetch['name']; ?></td>
					      <td><input type="text" name="username1" value="<?php echo $fetch['username']; ?>"></td>
					      <td><?php echo $fetch['email']; ?></td>
					      <td><?php echo ( $fetch['gender']== 1 )?'Male':'Female';  ?></td>
					      <td><?php echo $fetch['DOB']; ?></td>
					      <td><?php echo $fetch['mobile']; ?></td>
					      <td class="align">
					      	<select name="status1">
					      		<option <?php echo ($fetch['status']==1)?'selected':''; ?>>Online</option>
					      		<option <?php echo ($fetch['status']==2)?'selected':''; ?>>Suspend</option>
					      		<option <?php echo ($fetch['status']==3)?'selected':''; ?>>Delete</option>
					      	</select>
					      </td>
					      <td class="align">
					      	<select name="role1">
					      		<option <?php echo ($fetch['role']==1)?'selected':''; ?>>Admin</option>
					      		<option <?php echo ($fetch['role']==2)?'selected':''; ?>>Subadmin</option>
					      		<option <?php echo ($fetch['role']==3)?'selected':''; ?>>Retailer</option>
					      		<option <?php echo ($fetch['role']==4)?'selected':''; ?>>Customer</option>
					      	</select>
					      </td>
					      <td><div class="modify_button">
		  			<input type="submit" name="submit1" class="button" value="Modify"></input>
		  		</div></form></td>
				        </tr>
				        <form name="select_form2" action="admin_dashboard.php" method="post">
				        <tr>
				        	<?php
					      		$query = mysqli_query($con, "select * from users where id=".$_SESSION['id']++.""); 
								$fetch = mysqli_fetch_array($query); ?>
					      <td><?php echo $fetch['name']; ?></td>
					      <td><input type="text" name="username2" value="<?php echo $fetch['username']; ?>"></td>
					      <td><?php echo $fetch['email']; ?></td>
					      <td><?php echo ( $fetch['gender']== 1 )?'Male':'Female';  ?></td>
					      <td><?php echo $fetch['DOB']; ?></td>
					      <td><?php echo $fetch['mobile']; ?></td>
					      <td class="align">
					      	<select name="status2">
					      		<option <?php echo ($fetch['status']==1)?'selected':''; ?>>Online</option>
					      		<option <?php echo ($fetch['status']==2)?'selected':''; ?>>Suspend</option>
					      		<option <?php echo ($fetch['status']==3)?'selected':''; ?>>Delete</option>
					      	</select>
					      </td>
					      <td class="align">
					      	<select name="role2">
					      		<option <?php echo ($fetch['role']==1)?'selected':''; ?>>Admin</option>
					      		<option <?php echo ($fetch['role']==2)?'selected':''; ?>>Subadmin</option>
					      		<option <?php echo ($fetch['role']==3)?'selected':''; ?>>Retailer</option>
					      		<option <?php echo ($fetch['role']==4)?'selected':''; ?>>Customer</option>
					      	</select>
					      </td>
					      <td><div class="modify_button">
		  			<input type="submit" name="submit2" class="button" value="Modify">
		  		</div></from></td>
				        </tr>				        
					    <form name="select_form3" action="admin_dashboard.php" method="post">
				        <tr>
				        	<?php
					      		$query = mysqli_query($con, "select * from users where id=".$_SESSION['id']++.""); 
								$fetch = mysqli_fetch_array($query); ?>
					      <td><?php echo $fetch['name']; ?></td>
					      <td><input type="text" name="username3" value="<?php echo $fetch['username']; ?>"></td>
					      <td><?php echo $fetch['email']; ?></td>
					      <td><?php echo ( $fetch['gender']== 1 )?'Male':'Female';  ?></td>
					      <td><?php echo $fetch['DOB']; ?></td>
					      <td><?php echo $fetch['mobile']; ?></td>
					      <td class="align">
					      	<select name="status3">
					      		<option <?php echo ($fetch['status']==1)?'selected':''; ?>>Online</option>
					      		<option <?php echo ($fetch['status']==2)?'selected':''; ?>>Suspend</option>
					      		<option <?php echo ($fetch['status']==3)?'selected':''; ?>>Delete</option>
					      	</select>
					      </td>
					      <td class="align">
					      	<select name="role3">
					      		<option <?php echo ($fetch['role']==1)?'selected':''; ?>>Admin</option>
					      		<option <?php echo ($fetch['role']==2)?'selected':''; ?>>Subadmin</option>
					      		<option <?php echo ($fetch['role']==3)?'selected':''; ?>>Retailer</option>
					      		<option <?php echo ($fetch['role']==4)?'selected':''; ?>>Customer</option>
					      	</select>
					      </td>
					      <td><div class="modify_button">
		  			<input type="submit" name="submit3" class="button" value="Modify">
		  		</div></from></td>
				        </tr>
				    </tbody>
		  		</table>
		  	</div>
			  </div>
			  <button id="prev" onclick="prev()">Previous</button>
			  <button id="nxt" onclick="reoad()">Next</button>
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
