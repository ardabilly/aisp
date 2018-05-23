<h3>Input Barang Masuk</h3>
<hr>
<div class="panel panel-default col-sm-8" style="margin-left: 20%">
    <div class="panel-body">
        <form action="barang/proses_barang.php?aksi=tambahbarangmasuk" method="post" enctype="multipart/form-data">
            <div class="form-group col-sm-6">
                <label for="">Nama Supplier</label>
                <select name="nama_supplier" class="form-control" required>
                    <option value="">Pilih Supplier</option>
                    <?php 
                            foreach($db->supplier() as $sup)
                            {
                                ?>
                                <option value="<?=$sup['nama_supplier']?>"><?=$sup['nama_supplier']?></option>
                                <?php
                            }
                    ?>  
                </select>
            </div>

            <div class="form-group col-sm-6">
                <label for="date">Kode Barang Masuk</label>
                <input type="text" placeholder="kode Barang Masuk" name="id_masukbarang" class="form-control" required value="<?=$hasilkodemasuk?>" readonly> 
            </div>

            <div class="form-group col-sm-6">
                <label for="">Nama Barang</label>
                <select name="nama_barang" class="form-control" required>
                    <option value="">Pilih Barang</option>
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
                <label for="">Jumlah Masuk</label>
                <input type="text" placeholder="Masukan jumlah masuk" name="jumlah_masuk" class="form-control" required pattern="[0-9]+"> 
            </div>

            <div class="form-group col-sm-6">
                <label for="date">Tanggal Masuk</label>
                <input type="date" placeholder="Tanggal Masuk" name="tgl_masuk" class="form-control" required> 
            </div>

            <div class="form-group col-sm-12">
                <input type="submit" name="submit" class="btn btn-default" style="background-color: #333; color: #fff;" value="Simpan">
                <a href="barang.php?page=barangmasuk" class="btn btn-default">Batal</a>
            </div>
        </form>
    </div>
</div>

<style>
    label{
        font-size: 12px;
    }
</style>