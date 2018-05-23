<div class="tombol-kanan" style="float: right;">
<a href="barang.php?page=barangbaru" class="btn btn-default" ><i class="fa fa-plus"></i> Barang Baru</a>
<a href="stok/cetak_stok.php" target="_blank" class="btn btn-default"><i class="fa fa-external-link"></i> Eksport to Excel </a>
</div>
<h3>Data Barang</h3>
<hr>
<table class="table table-bordered">
  <tr>
    <th>No</th>
    <th>Kode Barang</th>
    <th>Nama Barang</th>
    <th>Spesifikasi</th>
    <th>Lokasi Barang</th>
    <th>Kategori</th>
    <th>Stok</th>
    <th>Kondisi</th>
    <th>Jenis Barang</th>
    <th>Sumber Dana</th>
    <th>Aksi</th>
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
    <td><?=$row['spesifikasi']?></td>
    <td><?=$row['lokasi_barang']?></td>
    <td><?=$row['kategori']?></td>
    <td><?=$row['jumlah_brg']?></td>
    <td><?=$row['kondisi']?></td>
    <td><?=$row['jenis_brg']?></td>
    <td><?=$row['sumber_dana']?></td>
    <td><a href="barang.php?id=<?=$row['kode_barang']?>&page=update">Edit</a> - <a href="barang.php?hapus&id=<?=$row['kode_barang']?>" onclick="return confirm('Yakin mau dihapus?');">Hapus</a></td>
  </tr>
     <?php 
    } 
  }
 ?>
</table>
