
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">Aplikasi Pengaduan</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="index.php">Home</a></li> 
				<?php if (isset($_SESSION['logged_siswa'])): ?>
					<li><a href="index.php?page=kritik">Kritik</a></li>
				<?php endif ?> 
		</ul>
		<ul class="nav navbar-nav navbar-right">	
			<li><form action="" method="POST"><button <?php if(isset($_SESSION['logged_siswa'])){echo 'name="logout"';}else{echo 'name="teacher"';} ?> class="btn btn-primary navbar-btn" style="margin-left: 300px;"><?php if(isset($_SESSION['logged_siswa'])){echo 'Logout';}else {echo 'I am a Teacher';} ?></button></form></li>
			<li><span style="color: $fff;">....</span></li>
		</ul>
	</div>
</nav>

<div style="margin-top: 70px;">
<?php 
	if (isset($_SESSION['logged_siswa'])) {
		include 'siswa/index.php';
	} else {
		echo '<div class="container" style="margin-top: 200px;">';
		echo 	'<div class="row">';
		echo 		'<div class="container">';
		echo 			'<center><h1 style="color: #fff;">Masukkan Kritik dan Saran Anda mengenai</h1> <h1 style="color: #fff;">SMK Negeri 1 Purbalingga</h1><br></center>';
		echo 			'<center><a class="btn btn-primary btn-md-9" href="login.php">&nbsp;LOGIN&nbsp;</a></center>';
		echo 		'</div>';
		echo 	'</div>';
		echo '</div>';

		if (isset($_POST['teacher'])) {
			header('Location: guru/index.php');
		}
	}
 ?>
</div>