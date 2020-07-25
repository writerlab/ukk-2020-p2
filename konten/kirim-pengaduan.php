<?php
if (isset($_POST['kirim'])) {
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];
  $nik = $_SESSION['nik'];
  $status = '0';

  $target_dir = 'foto/';
  $target_file = $target_dir . basename($_FILES['foto']['name']);
  if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
    $query = "insert into pengaduan values (
              NULL,
              NOW(),
              '$nik',
              '$judul',
              '$isi',
              '$target_file',
              '$status'
              )";
    $q = mysqli_query($konek, $query);
    if ($q) {
      $pesan = "<div class='alert alert-success'>Pengaduan berhasil dikirim.</div>";
    } else {
      $pesan = "<div class='alert alert-danger'>Terjadi kesalahan.</div>";
    }
  }
}

?>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        KIRIM PENGADUAN
      </div>
      <div class="card-body">
        <?php print $pesan?>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input name="judul" type="text" class="form-control" placeholder="Judul Laporan" required autofocus>
          </div>
          <div class="form-group">
            <textarea name="isi" id="" cols="30" rows="10" class="form-control" placeholder="Tulis isi laporan disini..." required></textarea>
          </div>
          <div class="form-group">
            <input name="foto" type="file" accept="image/*" class="form-control" required>
          </div>
          <button name="kirim" type="submit" class="btn btn-primary">Kirim</button>
        </form>
      </div>
    </div>
  </div>
</div>