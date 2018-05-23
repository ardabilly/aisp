<?php 
include('config/Class_Stok.php');
$db = new Class_Stok();

?>
<h1 align='left'>APLIKASI INVENTARIS</h1>
<p align='left'>Jl. Raya Puncak Cisarua</p>
<hr>
<table border="1">
<center>
  <h3>Data Stok</h3>
</center>
<br>
<br>
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