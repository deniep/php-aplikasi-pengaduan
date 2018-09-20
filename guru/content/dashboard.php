<?php 
	ob_start();
	session_start();

	if (isset($_SESSION['logged_guru'])) {
		
	include '../../config/koneksi.php';
	$result = $_SESSION['logged_guru'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Kritik dan Saran</title>
	<link rel="stylesheet" type="text/css" href="../../inc/css/bootstrap.css">
	<script type="text/javascript" src="../../inc/js/jquery.js"></script>
	<script type="text/javascript" src="../../inc/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="../../inc/css/summernote.css">
	<script type="text/javascript" src="../../inc/js/summernote.js"></script>
	<script type="text/javascript" src="../../inc/js/app.js"></script>
</head>
<body background="../../inc/img/tampilan_awal.jpg" style="background-size: 1366px 768px; background-attachment: fixed;">
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="dashboard.php">Dashboard Guru</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="dashboard.php?page=tambah">Tambah Artikel</a></li>
			<li><a href="dashboard.php?page=liat">Daftar Kritikan</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		<li><form action="" method="post"><button type="submit" class="btn btn-primary navbar-btn" name="logout">LOGOUT</button></form>
		</li>
		<li><span>...</span></li>
		</ul>
	</div>
</nav>

<div class="container">
	<?php 
		if (isset($_GET['page'])) {
			if ($_GET['page'] == 'tambah') {
				include 'form_input.php';
			} elseif ($_GET['page'] == 'liat') {
				include 'list_kritik.php';
			} else {

			}
		}

		if (isset($_POST['logout'])) {
			header('Location: ../../logout.php');
		}
	} else {
		header('Location: ../index.php');
	}
?>
</div>

</body>
</html>