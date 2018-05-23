<h3>Input Barang Baru</h3>
<hr>
<div class="panel panel-default col-sm-7 col-sm-offset-3 " style="margin-left: 20%">
    <div class="panel-body">
        <form action="barang/proses_barang.php?aksi=tambah" method="post" enctype="multipart/form-data">
            <div class="form-group col-sm-6">
                <label for="">Kode Barang</label>
                <input type="text" placeholder="kode Barang" name="kode_barang" class="form-control" required value="<?=$hasilkode?>" readonly> 
            </div>
            <div class="form-group col-sm-6">
                <label for="">Nama Barang</label>
                <input type="text" placeholder="Masukan Nama Barang" name="nama_barang" class="form-control" required> 
            </div>
            <div class="form-group col-sm-6">
                <label for="">Spesifikasi</label>
                <input type="text" placeholder="Spesifikasi" name="spesifikasi" class="form-control" required> 
            </div>
            <div class="form-group col-sm-6">
                <label for="">Lokasi</label>
                <input type="text" placeholder="Lokasi" name="lokasi_barang" class="form-control" required> 
            </div>
            <div class="form-group col-sm-6">
                <label for="">Kategori</label>
                <select name="kategori" class="form-control" required>
                    <option value="">Pilih Kategori</option>
                    <option value="Furniture">Furniture</option>
                    <option value="Elektronics">Elektronics</option>
                    <option value="Buku">Buku</option>
                </select>
            </div>
            <!-- <div class="form-group col-sm-6">
                <input type="text" placeholder="Stok" name="jumlah_brg" class="form-control" required> 
            </div>  -->
            <div class="form-group col-sm-6">
                <label for="">Kondisi</label>
                <select name="kondisi" class="form-control" required>
                    <option value="">Pilih Kondisi</option>
                    <option value="Baru">Baru</option>
                    <option value="Bekas">Bekas</option>
                </select>
            </div>

            <div class="form-group col-sm-6">
                <label for="">Jenis Barang</label>
                <input type="text" placeholder="Jenis Barang" name="jenis_barang" class="form-control" required> 
            </div> 
            <div class="form-group col-sm-6">
                <label for="">Sumber dana</label>
                <input type="text" placeholder="Sumber Dana" name="sumber_dana" class="form-control" required> 
            </div>
            <div class="form-group col-sm-6">
                <label for="">Keterangan</label>
                <textarea name="keterangan" class="form-control" required placeholder="keterangan"></textarea>
            </div>
            <div class="form-group col-sm-12">
                <input type="submit" name="submit" class="btn btn-default" style="background-color: #333; color: #fff;" value="Simpan">
                <a href="barang.php" class="btn btn-default">Batal</a>
            </div>
        </form>
    </div>
</div>