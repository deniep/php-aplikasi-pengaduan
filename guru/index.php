<?php 
session_start();
    if (isset($_SESSION['logged_guru'])) {
        header('Location: content/dashboard.php');
    } else {
       header('Location: login.php');
    }

  if (isset($_POST['logout'])) {
    header('Location: siswa/logout.php');
  }
 ?>