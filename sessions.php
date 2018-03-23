<?php
if (isset($_POST["L_submit"]) || isset($_POST["R_submit"])) {
	include 'connect.php';
	session_start();

	if (isset($_POST["L_submit"])) {


		$username = $_POST['L_uname'];
		$password = $_POST['L_pword'];

		$username = stripcslashes($username);
		$password = stripcslashes($password);
		$username = mysqli_real_escape_string($con,$username);
		$password = mysqli_real_escape_string($con,$password);

		$result = mysqli_query($con,"select role from users where (username='$username' and password='$password') or (email='$username' and password='$password') or (mobile='$username' and password='$password')");

		$a = mysqli_num_rows($result);

	
		if (mysqli_num_rows($result) == 1) {
			$role = mysqli_fetch_assoc($result);
		    $role = $role['role'];


			switch ($role) {
				case 1:
					$_SESSION['Admin'] = 'Admin';
					header('location:'.'admin_dashboard.php');
					break;
				case 2:
					$_SESSION['SubAdmin'] = 'SubAdmin';
					header('location:'.'Subadmin_dashboard.php');
					break;
				case 3:
					$_SESSION['Retailer'] = 'Retailer';
					header('location:'.'additems.php');
					break;
				case 4:
					$_SESSION['Customer'] = 'Customer';
					header('location:'.'products.php');
					break;
				default:
					header('location:'.'login.php');
					break;
			}

		}else {
			header('location'.'login.php');
			 
		}
	}

	if (isset($_POST["R_submit"])) {


		$name = $_POST['R_name'];
		$username = $_POST['R_uname'];
		$password = $_POST['R_pword'];
		$email = $_POST['R_email'];
		$gender = $_POST['R_gender'];
		$DOB = $_POST['R_DOB'];
		$role = $_POST['R_role'];
		$mobile = $_POST['R_mobile'];

		if ($role == "Admin") {
			$role = 1;
		}elseif ($role == "Sub-admin") {
			$role = 2;
		}elseif ($role == "Retailer") {
			$role = 3;
		}elseif ($role == "Customer") {
			$role = 4;
		}
        
		$gender = ($gender == 'male')?1:0;

		if ($status) {
			# code...
		}


		$name = stripcslashes($name);
		$username = stripcslashes($username);
		$password = stripcslashes($password);
		$email = stripslashes($email);
		$gender = stripcslashes($gender);
		$DOB = stripcslashes($DOB);
		$role = stripcslashes($role);
		$mobile = stripcslashes($mobile);

		$name = mysqli_real_escape_string($con,$name);
		$username = mysqli_real_escape_string($con,$username);
		$password = mysqli_real_escape_string($con,$password);
		$email = mysqli_real_escape_string($con,$email);
		$gender = mysqli_real_escape_string($con,$gender);
		$DOB = mysqli_real_escape_string($con,$DOB);
		$role = mysqli_real_escape_string($con,$role);
		$mobile = mysqli_real_escape_string($con,$mobile);

		$query = "insert into users values
				 ('$name','$username','$password','$gender','$email','$DOB','$role','$mobile',1)";
		$result = mysqli_query($con,$query);

		if ($result) {
					
			echo "Success";
		}
	}
}else {
	header('location:'.'login.php');
}
?>