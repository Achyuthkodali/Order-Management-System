<?php
include 'connect.php';
session_start();
$hi = $_SESSION['Admin'];
 echo "hello : $hi";
?>
<script type="text/javascript">
	var a = 2;
	if (a == 2) {
		<?php echo "this is when true"; ?>
	}else <?php echo "This is when false";  ?>
</script>