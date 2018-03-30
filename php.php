<?php 
	session_start();
	$_SESSION['id'] = 1	;
	if (isset($_GET['id'])) {
		$_SESSION['id'] = $_GET['id'];
	}	
?>