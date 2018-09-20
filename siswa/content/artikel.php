
<?php
require_once("config/koneksi.php");
$query = mysqli_query($conn, "select artikel.id_artikel,
									daftar_guru.nama,
									artikel.judul_artikel,
									artikel.isi_artikel,
									artikel.tgl_artikel from artikel join daftar_guru on 
									artikel.id_guru = daftar_guru.id_guru order by tgl_artikel desc");
$num = mysqli_num_rows($query);

if($num<1){
 echo'<center><div class="alert alert-danger">Tidak Ada Artikel</div></center>';
}else{
while($data=mysqli_fetch_array($query)){
  echo '
  	 <div class="panel">
     <div class="container">
     <div class="panel-body">
     <h2>'.$data['judul_artikel'].'</h2>
     <h6>Di publikasikan pada '.tgl($data['tgl_artikel']).'</h6>
     <h4>Oleh '.$data['nama'].'</h4>
     <p>'.$data['isi_artikel'].'</p>
     <br><br>
     </div>
     </div>
  	 </div>
   ';}
}
?>