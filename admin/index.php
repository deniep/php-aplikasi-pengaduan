<?php 
ob_start();
session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../inc/css/bootstrap.css">
	<script type="text/javascript" src="../inc/js/jquery.js"></script>
	<script type="text/javascript" src="../inc/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
	<?php 
		if (isset($_SESSION['logged_admin'])) {
			include 'content/dashboard.php';
		} else {
			 header('Location: login.php');
		}
	 ?>
</div>
</body>
</html>

<?php 
	if (isset($_POST['logout'])) {
		header('Location: ../logout.php');
	}
 ?>