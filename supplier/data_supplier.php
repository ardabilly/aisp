<div class="tombol-kanan" style="float: right;">
<!-- <a href="stok.php?page=barangbaru" class="btn btn-primary" >Barang Baru</a> -->
<!-- <a href="" class="btn btn-default" style="background-color: #333; color: #fff;" >Barang Masuk</a> -->
<a href="supplier.php?page=supplierbaru" class="btn btn-default" ><i class="fa fa-plus"></i> Supplier </a>
</div>
<h3>Data Supplier</h3>
<hr>
<table class="table table-bordered table-responsive text-center">
  <tr>
    <th>No</th>
    <th>Kode Supplier</th>
    <th>Nama Supplier</th>
    <th>Alamat Supplier</th>
    <th>Telp Supplier</th>
    <th>Kota Supplier</th>
    <th>Aksi</th>
  </tr>

    <?php 
    $no = 1;
    
    if (is_array($db->tampil_data()) && count($db->tampil_data()) > 0) {
    foreach ($db->tampil_data() as $row) {

     ?>
  <tr>
    <td><?=$no++?></td>
    <td><?=$row['kode_supplier']?></td>
    <td><?=$row['nama_supplier']?></td>
    <td><?=$row['alamat_supplier']?></td>
    <td><?=$row['telp_supplier']?></td>
    <td><?=$row['kota_supplier']?></td>
    <td><a href="supplier.php?id=<?=$row['kode_supplier']?>&page=updatesupplier">Edit</a> - <a href="supplier.php?hapus&id=<?=$row['kode_supplier']?>" onclick="return confirm('Yakin mau dihapus?');">Hapus</a></td>
  </tr    >
  <?php 
    } 
  }
 ?>

</table>
