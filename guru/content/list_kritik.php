<div style="margin-top: 70px;">
<?php
include "../../config/koneksi.php";
$query = mysqli_query($conn, "select kritikan.id_kritik,
									daftar_user.nama,
                  kritikan.id_guru,
									kritikan.isi_kritik,
									kritikan.tgl_kritik from kritikan join daftar_user on 
									kritikan.id_user = daftar_user.id_user where 
                  kritikan.id_guru = 1 or kritikan.id_guru = 69 order by tgl_kritik desc");
$num = mysqli_num_rows($query);

if($num<1){
 echo'<center><div class="alert alert-danger">Tidak Ada Artikel</div></center>';
}else{
while($data=mysqli_fetch_array($query)){
  echo '
  	 <div class="panel">
     <div class="container">
     <div class="panel-body">
     <h6>Di publikasikan pada '.$data['tgl_kritik'].'</h6>
     <h4>Oleh '.$data['nama'].'</h4>
     <p>'.$data['isi_kritik'].'</p>
     </div>
     </div>
  	 </div>
   ';}
}
?>
</div>