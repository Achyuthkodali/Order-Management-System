<?php 
	$con = mysqli_connect("localhost","root","","project");
	if (isset( $_GET['id'])) {
		$_SESSION['id'] = $_GET['id'];
	}
	
?>