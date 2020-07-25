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