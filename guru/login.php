<?php include '../config/koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="../inc/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="../inc/css/animate.css">
    <script type="text/javascript" src="../inc/js/jquery.js"></script>           
    <script src="../inc/js/materialize.js"></script>
</head>
<body class="teal accent-1">
<div class="container" style="margin-top: 90px;">
      <div class="row">
      <div class="section"></div>
          <div class="col s4 offset-s4 z-depth-1 teal accent-2 animated bounce">
            <div class="transparent" style="font-family: Helvetica;"><h3 style="text-align: center;">Login Guru</h3></div>
            
            <form action="" method="POST">
            <div class="input-field">
              <input  type="text" class="validate" name="user">
              <label for="username">Username</label>
          </div>
          <div class="input-field" id="password">
            <input  type="password" class="validate" name="pass">
            <label for="password">Password</label>
        </div>
     
        <button class="col s12 btn btn-large indigo" name="login" ">Login</button>
        <div class="section"></div>
        <div class="section"></div>
        </form>
        <div class="section"></div>
        </div>
      </div>
     </div>

</body>
</html>

<?php 
    if (isset($_POST['login'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $query = mysqli_query($conn, "select * from daftar_guru where user='$user' and pass='$pass'");
            if (mysqli_num_rows($query) == 1) {
                session_start();
                $_SESSION['logged_guru'] = mysqli_fetch_array($query);
                header('Location: index.php');
            } else {
                header('Location: login.php');
            }
    }
 ?>