<div class="row mb-3">
  <div class="col-md-12">
    <nav class="nav">
      <?php if ($_SESSION['level'] == 'netijen') { ?>
        <a href="?menu=kirim-pengaduan" class="nav-link">Kirim Pengaduan</a>
        <a href="?menu=logout" class="nav-link">Keluar</a>
      <?php } elseif ($_SESSION['level'] == 'petugas' || $_SESSION['level'] == 'admin') { ?>
        <a href="?menu=pengaduan" class="nav-link">Pengaduan</a>
        <a href="?menu=pengguna" class="nav-link">Pengguna</a>
        <a href="?menu=logout" class="nav-link">Keluar</a>
      <?php } ?>
    </nav>
  </div>
</div>