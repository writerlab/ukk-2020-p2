<?php
// BAGIAN UNTUK MENYIMPAN PERUBAHAN STATUS BARU
if (isset($_POST['simpan'])) {
  $status = $_POST['status'];
  $id = $_GET['id'];

  $q = mysqli_query($konek, "update pengaduan set status='$status' where id_pengaduan=$id");
  if ($q) {
    $pesan = "<div class='alert alert-success'>Status berhasil diubah!</div>";
  } else {
    $pesan = "<div class='alert alert-danger'>Terjadi kesalahan!</div>";
  }
}


// AMBIL DATA PENGADUAN YANG AKAN DI UBAH STATUSNYA
$id = $_GET['id'];
$q = mysqli_query($konek, "select * from pengaduan where id_pengaduan=$id");
$data = mysqli_fetch_assoc($q);

if ($data['status'] == '0') {
  $status = "<span class='badge badge-danger'>Pending</span>";
} else if($data['status'] == 'proses') {
  $status = "<span class='badge badge-info'>Proses</span>";
} else {
  $status = "<span class='badge badge-success'>Selesai</span>";
}

?>
<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h3>UBAH STATUS: <?php print $data['judul']?> - <?php print $status ?></h3>
      </div>
      <div class="card-body">
        <?php print $pesan ?>
        <form method="post">
          <div class="form-group">
            <label for="" class="label">Status</label>
            <select name="status" class="form-control">
              <option value="0">Pending</option>
              <option value="proses">Proses</option>
              <option value="selesai">Selesai</option>
            </select>
          </div>
          <button class="btn btn-primary" name="simpan">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>