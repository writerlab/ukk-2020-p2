<?php 
if (isset($_POST['kirim'])) {
  $nik      = $_POST['nik'];
  $nama     = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $telp = $_POST['telp'];

  $q = mysqli_query($konek, "insert into netijen values (
                            NULL, '$nik', '$nama', '$username',
                            md5('$password'), '$telp'
                            ) ");
  
  if ($q) {
    $pesan = "<div class='alert alert-success'>Akun telah berhasil dibuat</div>";
  } else {
    $pesan = "<div class='alert alert-danger'>Terjadi kesalahan</div>";
  }
}
?>


<div class="row">
      <div class="col-md-4 offset-md-4">
        <div class="card">
          <div class="card-header">
            REGISTRASI
          </div>
          <div class="card-body">
            <?php print $pesan ?>
            <form action="" method="post">
              <div class="form-group">
                <input type="text" name="nik" class="form-control" placeholder="NIK" required autofocus>
              </div>
              <div class="form-group">
                <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" required>
              </div>
              <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <div class="form-group">
                <label for="">No.Telepon</label>
                <input type="number" name="telp" class="form-control" placeholder="No.telepon" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary" name="kirim">Kirim</button>
              </div>
              <a href="?menu=login" class="text-muted">Sudah punya akun? Login disini</a>
            </form>
          </div>
        </div>
      </div>
    </div>