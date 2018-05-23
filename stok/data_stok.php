<div class="tombol-kanan" style="float: right;">
<a href="stok/cetak_stok.php" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print </a>
<a href="export_stok.php" target="_blank" class="btn btn-default"><i class="fa fa-external-link"></i> Eksport to Excel </a>
</div>
<h3>Data Stok</h3>
<hr>
<table class="table table-bordered table-responsive text-center">
  <tr>
    <th>No</th>
    <th>Kode Barang</th>
    <th>Nama Barang</th>
    <th>Jumlah Barang Masuk</th>
    <th>Jumlah Barang Keluar</th>
    <th>Total Barang</th>
    <th>Total Barang Saat Ini Tersedia</th>
  </tr>

    <?php 
    $no = 1;
    
    if (is_array($db->tampil_data()) && count($db->tampil_data()) > 0) {
    foreach ($db->tampil_data() as $row) {

     ?>
  <tr>
    <td><?=$no++?></td>
    <td><?=$row['kode_barang']?></td>
    <td><?=$row['nama_barang']?></td>
    <td><?=$row['jml_barangmasuk']?></td>
    <td><?=$row['jml_barangkeluar']?></td>
    <td><?=$row['total_barang']?></td>
    <td><?=$row['jumlah_brg']?></td>
  </tr>
  <?php 
    } 
  }
 ?>

</table>
