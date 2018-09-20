<div style="margin-top: 70px;">
<form action="" method="POST">
    <fieldset>
        <div class="col-xs-3">
            <div class="form-group">

                    <p>
                        <label for="judul">Judul</label>
                        <input class="form-control" type="text" name="judul">
                    </p>

                    <p>
                        <label for="artikel">Artikel</label>
                        <textarea class="form-control" name="konten"></textarea>
                    </p>

                        <button class="btn btn-primary" type="submit" name="kirim">Kirim</button> <button class="btn btn-danger" type="submit" name="logout">logout</button>
                    </p>
                    <?php
                    include '../../config/koneksi.php';
                        if (isset($_POST['kirim'])) {
                            $konten = $_POST['konten'];
                            $judul = $_POST['judul'];
                            $query = mysqli_query($conn, "insert into artikel values (null, '".$result["id_guru"]."', 
                                '$judul', '$konten', '".date('Y-m-d')."')");
                                if ($query) {
                                    echo "<div class='alert alert-success'>Terkirim</div>";
                                }
                        }elseif (isset($_POST['logout'])) {
                             header('Location: ../../logout.php');
                        }
                        ?>
            </div>
         </div>
        </fieldset>
</form>
</div>