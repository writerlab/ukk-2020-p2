<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  include("koneksi.php");
  include("konten/head.html");
  ?>
</head>
<body>

  <div class="container">
    <?php
    include("konten/judul.html");

    if (!empty($_SESSION['id'])) {
      include("konten/nav.php");
      include("atur-konten.php");    
    } else {
      if ($_GET['menu'] == 'registrasi') {
        include('konten/registrasi.php');
      } else {
        include('konten/login.php');
      }
    }
      

    ?>
  </div>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>