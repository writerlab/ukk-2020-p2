<?php
// PROSES MENGIRIM TANGGAPAN
if (isset($_POST['simpan'])) {
  $tanggapan = $_POST['tanggapan'];
  $id_petugas = $_SESSION['id'];
  $id_pengaduan = $_GET['id'];

  $q = mysqli_query($konek, "insert into tanggapan values (
                            NULL,
                            $id_pengaduan,
                            NOW(),
                            '$tanggapan',
                            $id_petugas
                            )");
  if ($q) {
    $pesan = "<div class='alert alert-success'>Tanggapan berhasil dikirim.</div>";
  } else {
    $pesan = "<div class='alert alert-danger'>Terjadi kesalahan!</div>";
  }
}


// AMBIL DATA PENGADUAN YANG AKAN DIBERI TANGGAPAN
$id = $_GET['id'];
$q = mysqli_query($konek, "select a.*, b.* from pengaduan a
inner join pengguna b on a.nik=b.nik where a.id_pengaduan=$id");
$data = mysqli_fetch_assoc($q);
?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        TANGGAPAN: <span class="text-muted"><?php print $data['judul'] ?> oleh <?php print $data['nama'] ?></span>
      </div>
      <div class="card-body">
        <?php print $pesan?>
        <form action="" method="post">
          <div class="form-group">
            <textarea name="tanggapan" class="form-control" id="" cols="30" rows="10" placeholder="Tulis tanggapan disini..." required></textarea>
          </div>
          <button name="simpan" class="btn btn-primary">Kirim</button>
        </form>
      </div>
    </div>
  </div>
</div>