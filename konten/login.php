<?php
if (isset($_POST['kirim'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = mysqli_query($konek, "select * from netijen where 
  username='$username' and password=md5('$password') ");

  $jumlah = mysqli_num_rows($query);

  if ($jumlah > 0) {
    $sesi = mysqli_fetch_assoc($query);

    $_SESSION['id'] = $sesi['id_netijen'];
    $_SESSION['nik'] = $sesi['nik'];
    $_SESSION['nama'] = $sesi['nama'];

    print "<meta http-equiv='refresh' content='0; url=?menu=home'>";
  } else {
    $pesan = "<div class='alert alert-danger'>Username & Password tidak cocok</div>";
  }
}
?>

<div class="row">
      <div class="col-md-4 offset-md-4">
        <div class="card">
          <div class="card-header">
            LOGIN
          </div>
          <div class="card-body">
            <?php print $pesan?>
            <form action="" method="post">
              <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </div>