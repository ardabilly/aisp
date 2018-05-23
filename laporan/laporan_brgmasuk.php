<?php 
include('config/Class_Barang.php');
$db = new Class_Barang();

?>
<h1 align='left'>APLIKASI INVENTARIS</h1>
<p align='left'>Jl. Raya Puncak Cisarua</p>
<hr>
<table border="1">
<center>
  <h3>Data Barang Masuk</h3>
</center>
<br>
<br>
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