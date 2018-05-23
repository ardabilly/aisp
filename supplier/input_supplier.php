<h3>Input Data Supplier Baru</h3>
<hr>
<div class="panel panel-default col-sm-6" style="margin-left: 25%;">
    <div class="panel-body">
        <form action="supplier/proses_supplier.php?aksi=tambah" method="post" enctype="multipart/form-data">
            <div class="form-group ">
                <label for="">Kode Supplier</label>
                <input type="text" placeholder="kode Supplier" name="kode_supplier" class="form-control" required value="<?=$hasilkode1?>" readonly> 
            </div>
            <div class="form-group ">
                <label for="">Nama Supplier</label>
                <input type="text" placeholder="Masukan Nama Supplier" name="nama_supplier" class="form-control" required> 
            </div>
            <div class="form-group ">
                <label for="">Alamat Supplier</label>
                <textarea name="alamat_supplier" class="form-control" required placeholder="Alamat Supplier"></textarea>
            </div>
            <div class="form-group ">
                <label for="">Telp Supplier</label>
                <input type="text" placeholder="Telp Supplier" name="telp_supplier" class="form-control" required minlength="11"> 
            </div>
            <div class="form-group ">
                <label for="">Kota Supplier</label>
                    <input type="text" placeholder="Kota Supplier" name="kota_supplier" class="form-control" required> 
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-default" style="background-color: #333; color: #fff;" value="Simpan">
                <a href="supplier.php" class="btn btn-default">Batal</a>
            </div>
        </form>
    </div>
</div>