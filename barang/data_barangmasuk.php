<div class="tombol-kanan" style="float: right;">
<a href="barang.php?page=inputbarangmasuk" class="btn btn-default" ><i class="fa fa-plus"></i> Barang Masuk</a>
<a href="export_brgmasuk.php" target="_blank" class="btn btn-default"><i class="fa fa-external-link"></i> Eksport to Excel </a>

</div>
<h3>Data Barang Masuk</h3>
<hr>
<table class="table table-bordered">
  <tr>
    <th>No</th>
    <th>Kode Barang</th>
    <th>Nama Barang</th>
    <th>Spesifikasi</th>
    <th>Lokasi Barang</th>
    <th>Kategori</th>
    <th>Jumlah Masuk</th>
    <th>Kondisi</th>
    <th>Jenis Barang</th>
    <th>Sumber Dana</th>
    <th>Tanggal Masuk</th>
    <th>Supplier</th>
    <th>Keterangan</th>
  </tr>
   <?php 
    $no = 1;
    if (is_array($db->tampil_barangmasuk()) && count($db->tampil_barangmasuk()) > 0) {

    foreach ($db->tampil_barangmasuk() as $row) {

     ?>
  <tr>
    <td><?=$no++?></td>
    <td><?=$row['kode_barang']?></td>
    <td><?=$row['nama_barang']?></td>
    <td><?=$row['spesifikasi']?></td>
    <td><?=$row['lokasi_barang']?></td>
    <td><?=$row['kategori']?></td>
    <td><?=$row['jumlah_masuk']?></td>
    <td><?=$row['kondisi']?></td>
    <td><?=$row['jenis_brg']?></td>
    <td><?=$row['sumber_dana']?></td>
    <td><?=$row['tgl_masuk']?></td>
    <td><?=$row['nama_supplier']?></td>
    <td><?=$row['keterangan']?></td>
  </tr>
     <?php 
    } 
  }
 ?>
</table>
