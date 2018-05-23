<h3>Form Peminjaman</h3>
<hr>
<div class="panel panel-default col-sm-8" style="margin-left: 20%" >
    <div class="panel-body">
        <form action="barang/proses_barang.php?aksi=tambahdatapinjam" method="post" enctype="multipart/form-data">
            
            <div class="form-group col-sm-6">
                <label for="">No Pinjam</label>
                <input type="text" placeholder="Kode Peminjaman" name="no_pinjam" class="form-control" required value="<?=$hasilkodepinjam?>" readonly> 
            </div>

            <div class="form-group col-sm-6">
                <label for="">Tanggal Pinjam</label>
                <input type="date" placeholder="Tanggal Pinjam" name="tgl_pinjam" class="form-control"  required> 
            </div>

            <div class="form-group col-sm-6">
                <label for="">Nama Barang</label>
                <select name="nama_barang" class="form-control" required>
                    <option value="">Pilih Nama Barang</option>
                    <?php 
                            foreach($db->barang() as $brg)
                            {
                                ?>
                                <option value="<?=$brg['nama_barang']?>"><?=$brg['nama_barang']?></option>
                                <?php
                            }
                    ?>  
                </select>
            </div>
            
            <div class="form-group col-sm-6">
                <label for="">Jumlah Pinjam</label>
                <input type="text" placeholder="Jumlah Pinjam" name="jumlah_pinjam" class="form-control" required pattern="[0-9]+">
            </div>

            <div class="form-group col-sm-6">
                <label for="">Nama Peminjam</label>
                <input type="text" placeholder="Masukan Nama Peminjam" name="nama_peminjam" class="form-control" required>
            </div>

            <div class="form-group col-sm-6">
                <label for="">Tanggal Pengembalian</label>
                <input type="date" placeholder="Tanggal Peminjaman" name="tgl_kembali" class="form-control" required> 
            </div>

            <div class="form-group col-sm-6">
                <label for="">Keterangan</label>
                <select name="keterangan" class="form-control" required>
                    <option value="">Keterangan</option>
                    <option value="Sedang dipinjam">Sedang dipinjam</option>
                </select>
            </div>
            
            <div class="form-group col-sm-12">
                <input type="submit" name="submit" class="btn btn-default" style="background-color: #333; color: #fff;" value="Simpan">
                <a href="barang.php?page=barangmasuk" class="btn btn-default">Batal</a>
            </div>

            
        </form>
    </div>
</div>
