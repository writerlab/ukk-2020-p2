<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3>DATA PENGADUAN</h3>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <div class="tr">
              <th>TGL.</th>
              <th>NAMA</th>
              <th>JUDUL</th>
              <th>FOTO</th>
              <th>STATUS</th>
              <th>TINDAKAN</th>
            </div>
          </thead>
          <tbody>
            <?php
            $query = mysqli_query($konek, "select a.*, b.* from pengaduan a
                                          inner join pengguna b on a.nik=b.nik");
            while($row = mysqli_fetch_assoc($query)) {
            ?>
              <tr>
                <td><?php print $row['tgl_pengaduan']?></td>
                <td><?php print $row['nama']?></td>
                <td><?php print $row['judul']?></td>
                <td><img src="<?php print $row['foto']?>" width="50%"></td>
                <td>
                <?php
                if ($row['status'] == '0') {
                  $status = "<span class='badge badge-danger'>Pending</span>";
                } else if($row['status'] == 'proses') {
                  $status = "<span class='badge badge-info'>Proses</span>";
                } else {
                  $status = "<span class='badge badge-success'>Selesai</span>";
                }

                print $status;
                ?>
                </td>
                <td>
                  <a href="?menu=kirim-tanggapan&id=<?php print $row['id_pengaduan']?>" class="btn btn-info">T</a>
                  <a href="?menu=verifikasi&id=<?php print $row['id_pengaduan'] ?>" class="btn btn-success">V</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>