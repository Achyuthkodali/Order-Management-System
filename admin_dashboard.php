 <?php
	session_start();
	include 'connect.php';
	$id = 1;
	if ($_SESSION['Admin'] == 'Admin') {
		if(isset($_POST['submit'])){
			$status = $_POST['status'];
			$role = $_POST['role'];

			$username = $_POST['username'];


			$role = stripcslashes($role);
			$status = stripcslashes($status);


			$status = mysqli_real_escape_string($con,$status);
			$role = mysqli_real_escape_string($con,$role);

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


			/*if ($role == "Subadmin") {
				$role = 2;
			}elseif ($role == "Retailer") {
				$role = 3;
			}elseif ($role == "Customer") {
				$role = 4;
			}*/
     
			if ($status == "Suspend") {
				$status = 1;
			}else $status = 2;

			$query = mysqli_query($con,"update users set role=$role, status=$status where username='$username'");
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="styles/dashboard_style1.css">
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
			  <div>
			  	<table width="100%" class="dashboard_table">
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
				        <form name="select_form" action="admin_dashboard.php" method="post">		        		
					    <tr>
					      <?php
					      		$query = mysqli_query($con, "select * from users where id=".$id++.""); 
								$fetch = mysqli_fetch_array($query); ?>
					      <td><?php echo $fetch['name']; ?></td>
					      <td><?php echo $fetch['username']; ?></td>
					      <td><?php echo $fetch['email']; ?></td>
					      <td><?php echo ( $fetch['gender']== 1 )?'Male':'Female';  ?></td>
					      <td><?php echo $fetch['DOB']; ?></td>
					      <td><?php echo $fetch['mobile']; ?></td>
					      <td class="align">
					      	<select>
					      		<option>Suspend</option>
					      		<option>Delete</option>
					      	</select>
					      </td>
					      <td class="align">
					      	<select name="role">
					      		<option>Subadmin</option>
					      		<option>Consumer</option>
					      		<option>Retailer</option>
					      		<option>Customer</option>
					      	</select>
					      </td>
					      <td><div class="modify_button">
		  			<input type="submit" name="submit" class="button" value="Modify"></input>
		  		</div></form></td>
				        </tr>
				        <form name="select_form" action="admin_dashboard.php" method="post">
				        <tr>
				        	<?php
					      		$query = mysqli_query($con, "select * from users where id=".$id++.""); 
								$fetch = mysqli_fetch_array($query); ?>
					      <td><?php echo $fetch['name']; ?></td>
					      <td><input type="text" name="username" value="<?php echo $fetch['username']; ?>"></td>
					      <td><?php echo $fetch['email']; ?></td>
					      <td><?php echo ( $fetch['gender']== 1 )?'Male':'Female';  ?></td>
					      <td><?php echo $fetch['DOB']; ?></td>
					      <td><?php echo $fetch['mobile']; ?></td>
					      <td class="align">
					      	<select name="status">
					      		<option>Suspend</option>
					      		<option>Delete</option>
					      	</select>
					      </td>
					      <td class="align">
					      	<select name="role">
					      		<option>Subadmin</option>
					      		<option>Consumer</option>
					      		<option>Retailer</option>
					      		<option>Customer</option>
					      	</select>
					      </td>
					      <td><div class="modify_button">
		  			<input type="submit" name="submit" class="button"></input>
		  		</div></from></td>
				        </tr>				        
					    <form name="select_form" action="admin_dashboard.php" method="post">
				        <tr>
				        	<?php
					      		$query = mysqli_query($con, "select * from users where id=".$id++.""); 
								$fetch = mysqli_fetch_array($query); ?>
					      <td><?php echo $fetch['name']; ?></td>
					      <td><?php echo $fetch['username']; ?></td>
					      <td><?php echo $fetch['email']; ?></td>
					      <td><?php echo ( $fetch['gender']== 1 )?'Male':'Female';  ?></td>
					      <td><?php echo $fetch['DOB']; ?></td>
					      <td><?php echo $fetch['mobile']; ?></td>
					      <td class="align">
					      	<select name="status">
					      		<option>Suspend</option>
					      		<option>Delete</option>
					      	</select>
					      </td>
					      <td class="align">
					      	<select name="role">
					      		<option>Subadmin</option>
					      		<option>Consumer</option>
					      		<option>Retailer</option>
					      		<option>Customer</option>
					      	</select>
					      </td>
					      <td><div class="modify_button">
		  			<input type="submit" name="submit" class="button"></input>
		  		</div></from></td>
				        </tr>
				        <tr>
				        	<?php
					      		$query = mysqli_query($con, "select * from users where id=".$id++.""); 
								$fetch = mysqli_fetch_array($query); ?>
					      <td><?php echo $fetch['name']; ?></td>
					      <td><?php echo $fetch['username']; ?></td>
					      <td><?php echo $fetch['email']; ?></td>
					      <td><?php echo ( $fetch['gender']== 1 )?'Male':'Female';  ?></td>
					      <td><?php echo $fetch['DOB']; ?></td>
					      <td><?php echo $fetch['mobile']; ?></td>
					      <td class="align">
					      	<form name="select_form" action="admin_dashboard.php" method="post">
					      	<select name="status">
					      		<option>Suspend</option>
					      		<option>Delete</option>
					      	</select>
					      </td>
					      <td class="align">
					      	<select name="role">
					      		<option>Subadmin</option>
					      		<option>Consumer</option>
					      		<option>Retailer</option>
					      		<option>Customer</option>
					      	</select>
					      </td>
					      <td><div class="modify_button">
		  			<input type="submit" name="submit" class="button"></input>
		  		</div></from></td>
				        </tr>
					    <tr>
					    	<?php
					      		$query = mysqli_query($con, "select * from users where id=".$id++.""); 
								$fetch = mysqli_fetch_array($query); ?>
					      <td><?php echo $fetch['name']; ?></td>
					      <td><?php echo $fetch['username']; ?></td>
					      <td><?php echo $fetch['email']; ?></td>
					      <td><?php echo ( $fetch['gender']== 1 )?'Male':'Female';  ?></td>
					      <td><?php echo $fetch['DOB']; ?></td>
					      <td><?php echo $fetch['mobile']; ?></td>
					      <td class="align">
					      	<form name="select_form" id="select_form" action="admin_dashboard.php" method="post">
					      	<select name="status">
					      		<option>Suspend</option>
					      		<option>Delete</option>
					      	</select>
					      </td>
					      <td class="align">
					      	<select name="role">
					      		<option>Subadmin</option>
					      		<option>Consumer</option>
					      		<option>Retailer</option>
					      		<option>Customer</option>
					      	</select>
					      </td>
					      <td><div class="modify_button">
		  			<input type="submit" name="submit" class="button"></input>
		  		</div></from></td>	
				        </tr>
    				</tbody>
		  		</table>
			  </div>



			  <div class="add_user">
			  	<h2>Add user</h2>
			  	<table width="30%" class="add_user_tab">
			  		<form name="select_form" id="select_form" action="admin_dashboard.php" method="post">
			  		<tr class="add_user_table">
			  			<th>Name</th>
			  			<td><input type="text" name="name" placeholder="Name"></td>
			  		</tr>
			  		<tr>
			  			<th>Username</th>
			  			<td><input type="text" name="name" placeholder="Username"></td>
			  		</tr>
			  		<tr>
			  			<th>Password</th>
					    <td><input type="text" name="name" placeholder="password"></td>
					</tr>
					<tr>
						<th>Date of birth</th>
					    <td><input type="date" name="name" placeholder="Date Of Birth"></td>
					</tr>
					<tr>
						<th>Gender</th>
					    <td><select name="gender"><option>male</option><option>Female</option></select></td>
					</tr>
					<tr>
						<th>Email</th>
					    <td><input type="Email" name="name" placeholder="Email"></td>
					</tr>
					<tr>
						<th>Mobile</th>
					    <td><input type="Number" name="name" placeholder="Mobile"></td>
					</tr>
					<tr>
						<th>Role</th>
					    <td class="align">
					    	<select name="role">
					    		<option>Subadmin</option>
					    		<option>Consumer</option>
					    		<option>Retailer</option>
					    		<option>Customer</option>
					    	</select>
					    </td>
					</tr>
					<tr>
						<th>Status</th>
					    <td class="align">
					    	<select name="status">
					    		<option>Suspend</option>
					    		<option>Delete</option>
					    	</select>
					    </td>
					</tr>
			  	</table>
			  	<div>
		  			<input type="submit" name="add_submit" class="button_2" value="Add Users"></input>
		  		</div>
		  	</form>
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
<script type="text/javascript">
	function submit_form(){
		var a = document.getElementById("select_form");
		a.submit();
	}
	function insertUsers(){
		$query = "insert into users (name,username,password,email,mobile)";
	}
</script>