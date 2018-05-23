<div class="tombol-kanan" style="float: right;">
<a href="export_brgkeluar.php" target="_blank" class="btn btn-default"><i class="fa fa-external-link"></i> Eksport to Excel </a>

</div>
<h3>Data Barang Keluar</h3>
<hr>
<table class="table table-bordered">
  <tr>
    <th>No</th>
    <th>Kode Barang</th>
    <th>Nama Barang</th>
    <th>Tanggal Keluar</th>
    <th>Penerima</th>
    <th>Jumlah Keluar</th>
  </tr>
   <?php 
    $no = 1;
    if (is_array($db->tampil_barangkeluar()) && count($db->tampil_barangkeluar()) > 0) {

    foreach ($db->tampil_barangkeluar() as $row) {

     ?>
  <tr>
    <td><?=$no++?></td>
    <td><?=$row['kode_barang']?></td>
    <td><?=$row['nama_barang']?></td>
    <td><?=$row['tgl_keluar']?></td>
    <td><?=$row['penerima']?></td>
    <td><?=$row['jumlah_keluar']?></td>
  </tr>
     <?php 
    } 
  }
 ?>
</table>
