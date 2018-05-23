<div class="tombol-kanan" style="float: right;">
<a href="barang.php?page=formpeminjaman" class="btn btn-default tombol-pinjam" style="" >Form Peminjaman</a>
<a href="stok/cetak_stok.php" target="_blank" class="btn btn-default"><i class="fa fa-external-link"></i> Eksport to Excel </a>

</div>
<h3>Data Barang Dipinjam</h3>
<hr>
<table class="table table-bordered">
  <tr>
    <th>No</th>
    <th>No Pinjam</th>
    <th>Tanggal Pinjam</th>
    <th>Kode Barang</th>
    <th>Nama Barang</th>
    <th>Jumlah Pinjam</th>
    <th>Nama Peminjam</th>
    <th>Tanggal Kembali</th>
    <th>Keterangan</th>
    <th>Pilihan</th>
  </tr>
   <?php 
    $no = 1;
    if (is_array($db->tampil_peminjaman()) && count($db->tampil_peminjaman()) > 0) {
    foreach ($db->tampil_peminjaman() as $row) {

     ?>
  <tr>
    <td><?=$no++?></td>
    <td><?=$row['nomor_pinjam']?></td>
    <td><?=$row['tgl_pinjam']?></td>
    <td><?=$row['kode_barang']?></td>
    <td><?=$row['nama_barang']?></td>
    <td><?=$row['jumlah_pinjam']?></td>
    <td><?=$row['peminjam']?></td>
    <td><?=$row['tgl_kembali']?></td>
    <td style="color:red; font-weight: bold;"><?=$row['keterangan']?></td>
    <td class="text-center">
    <?php 
        if ($row['keterangan'] == 'Sudah dikembalikan') {
     ?>
    
        <span class="">-</span>

     <?php 
        }
        else{
      ?>
    <form action="barang/proses_barang.php?aksi=kembalibarang" method="post">
            <select name="status" class="form-control" style="width: 180px; height: 30px;" required>
                <option selected="selected"></option>
                <option value="Sudah dikembalikan">Sudah dikembalikan</option>
            </select>
            <br>
            <input type="text" name="no_pinjam" value="<?=$row['nomor_pinjam']?>" hidden>
            <input type="submit" value="proses" class="btn btn-default" style="padding:5px;">
    </form>
    <?php } ?>
    </td>
  </tr>
     <?php 
    } 
  }
 ?>
</table>

<style>
.btn:hover{
  background-color: #333; color: #fff;
}
</style>