<?php
if ($_GET['menu'] == 'home') {
  include("konten/home.php");
}
elseif ($_GET['menu'] == 'logout') {
  session_start();
  session_destroy();
  print "<meta http-equiv='refresh' content='0; url=?menu=login'>";
}
elseif ($_GET['menu'] == 'kirim-pengaduan') {
  include('konten/kirim-pengaduan.php');
}
elseif ($_GET['menu'] == 'pengaduan') {
  include('konten/pengaduan.php');
}
elseif ($_GET['menu'] == 'verifikasi') {
  include('konten/verifikasi.php');
}
elseif ($_GET['menu'] == 'kirim-tanggapan') {
  include('konten/kirim-tanggapan.php');
}