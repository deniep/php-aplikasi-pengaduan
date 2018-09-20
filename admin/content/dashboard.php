<?php

if(!isset($_SESSION['logged_admin']))
{
 header("Location: ../index.php");
}

include '../config/koneksi.php';

$result = $_SESSION['logged_admin'];

$siswa = mysqli_query($conn, "select * from daftar_user");

?>

<!DOCTYPE html>
<html>
<head>
	<title> Dashboard - Admin</title>
	<link rel="stylesheet" type="text/css" href="../../inc/css/bootstrap.css">
	<script type="text/javascript" src="../../inc/js/jquery.js"></script>	
	<script type="text/javascript" src="../../inc/js/bootstrap.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Dashboard - Admin</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        	<div class="navbar-form navbar-right">
				<a href="../logout.php" type="submit" class="btn btn-success"><i class="fa fa-sign-out"></i> Logout</a>
        	</div>
      </div>
    </nav>
<div class="container" style="margin-top: 80px">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
			  <a href="#" class="list-group-item active" style="text-align: center;background-color: black;border-color: black">
			    ADMINISTRATOR
			  </a>
			  <a href="#" class="list-group-item"> Dashboard</a>
			  <a href="index.php?page=tambah" class="list-group-item">Tambahkan User</a>
			  <a href="index.php?page=kritikan" class="list-group-item">Kritik, saran, dan pengaduan</a>
			  <form action="" method="POST"><button class="list-group-item" name="logout">Logout</button></form>
			</div>
		</div>
		<div class="col-md-9">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title"><i class="fa fa-dashboard"></i> Dashboard</h3>
			  </div>
			  <div class="panel-body">
			  	<?php 
			  		switch ($_GET['page']) {
			  			case 'tambah':
			  				require_once('tambah_user.php');
			  				break;
			  			
			  			default:
			  				# code...
			  				break;
			  		}
			  	 ?>
			  </div>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<?php 
	if (isset($_POST['logout'])) {
		header('Location: proyek_pengaduan/logout.php');
	}
 ?>