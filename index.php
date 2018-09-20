<?php session_start(); 
date_default_timezone_set('Asia/Jakarta');
include 'config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pengaduan</title>
	<link rel="stylesheet" type="text/css" href="inc/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="inc/css/style.css">
	<link rel="stylesheet" type="text/css" href="inc/css/language.css">
	<script type="text/javascript" src="inc/js/bootstrap.js"></script>
	<script type="text/javascript" src="inc/js/jquery.js"></script>
	<script type="text/javascript" src="inc/js/check.js"></script>
</head>
<body background="inc/img/tampilan_awal.jpg" style="background-size: 1366px 768px; background-attachment: fixed;">
<?php 
	if (isset($_SESSION['logged_guru'])) {
		include 'guru/index.php';
	}else if (isset($_SESSION['logged_admin'])) {
		header('Location: admin/index.php');
	} else {
		include 'konten_utama.php';
	}
 ?>

</body>
</html>