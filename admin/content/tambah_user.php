<div class="form-group">
	<form action="" method="POST">
		<div class="row">
			<label for="nama_user">Nama</label>
			<input class="form-control" type="text" name="nama_user">
		</div>
		<div class="row">
			<label for="user">Username</label>
			<input class="form-control" type="text" name="user">
		</div>
		<div class="row">
			<label for="password">Password</label>
			<input class="form-control" type="password" name="pass">
		</div>
		<div class="row">
			<select name="pilihan">
				<option value="" selected disabled>Pilih</option>
				<option value="guru">Guru</option>
				<option value="user">Siswa</option>
			</select>
		</div>
		<div class="row">
			<button class="btn btn-primary" type="submit" name="tambah">Tambah</button>
		</div>
	</form>
</div>

<?php 
	if (isset($_POST['tambah'])) {
		$nama = $_POST['nama_user'];
		$user = $_POST['user'];
		$options = ['cost' => 12,];
		$pass = password_hash($_POST ['pass'], PASSWORD_BCRYPT, $options);
		$pilih = $_POST['pilihan'];
			$query = mysqli_query($conn, "INSERT INTO daftar_{$pilih} VALUES (null, '$nama', '$user', '$pass')");
			if ($query) {
				echo "<div class='alert alert-succes'>Sukses</div>";
			}
	}
 ?>