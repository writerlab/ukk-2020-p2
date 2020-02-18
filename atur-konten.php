<?php
if ($_GET['menu'] == 'registrasi') {
  include("konten/registrasi.php");
}
elseif ($_GET['menu'] == 'login') {
  include("konten/login.php");
}
elseif ($_GET['menu'] == 'logout') {
  session_destroy();
  print "<meta http-equiv='refresh' content='0; url=?menu=login'>";
}
elseif ($_GET['menu'] == 'home') {
  include("konten/home.php");
}