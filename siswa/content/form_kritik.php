<div class="container" style="margin-top: 25px">
		<div class="col-md-20">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title"><i class="fa fa-dashboard"></i> Kritik, Saran, dan Pengaduan</h3>
			  </div>
			  <div class="panel-body">
				<form action="" method="POST">
					<fieldset>
						<div class="col-xs-3">
						<div class="form-group">

								<p>
									<label for="alamat">Kritik, Saran, dan Pengaduan Anda</label>
									<textarea class="form-control" name="kritik"></textarea>
								</p>
								<p>
									<label for="guru">Ditujukan untuk : </label>
									<select name="guru">
										<?php 
											$q_guru = mysqli_query($conn, "SELECT * FROM daftar_guru");
											while($data_guru = mysqli_fetch_array($q_guru))
											{
												echo '<option value='.$data_guru['id_guru'].'>'.$data_guru['nama'].'</option>';
											}
											 echo '<option value=69>Semua Guru</option>'
										?>
									</select>
								</p>
								<p>
									<button class="btn btn-primary" type="submit" name="kirim">Kirim</button><button class="btn btn-danger" type="reset">Hapus</button>
								</p>
								<?php 
									if (isset($_POST['kirim'])) {
										$result = $_SESSION['logged_siswa'];
										$id_guru = $_POST['guru'];
										$kritik = $_POST['kritik'];
										$query = mysqli_query($conn, "insert into kritikan values (null, '".$result["id_user"]."', '$id_guru', '$kritik', '".date('Y-m-d')."')");
											if ($query) {
												echo "<div class='alert alert-success'>Terkirim</div>";
											} else {
												echo "<div class='alert alert-danger'> Gagal!</div>";
											}
									}
								 ?>
						</div>
						</div>
					</fieldset>
				</form>
			  </div>
			</div>
		</div>
	</div>
</div>

