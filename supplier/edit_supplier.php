<h3>Edit Data Supplier</h3>
<hr>
<div class="panel panel-default col-sm-6" style="margin-left: 25%;">
    <div class="panel-body">
        <?php 

         foreach ($db->edit_supplier($_GET['id']) as $row) {
         ?>
        <form action="supplier/proses_supplier.php?aksi=update" method="post" enctype="multipart/form-data">
            <div class="form-group ">
                <label for="">Kode Supplier</label>

                <input type="text" placeholder="kode Supplier" name="kode_supplier" class="form-control" required value="<?=$row['kode_supplier']?>" readonly> 
            </div>
            <div class="form-group ">
                <label for="">Nama Supplier</label>

                <input type="text" placeholder="Nama Supplier" name="nama_supplier" class="form-control" required value="<?=$row['nama_supplier']?>"> 
            </div>
            <div class="form-group ">
                <label for="">Alamat Supplier</label>

                <textarea name="alamat_supplier" class="form-control" required placeholder="Alamat Supplier"><?=$row['alamat_supplier']?></textarea>
            </div>
            <div class="form-group ">
                <label for="">Telp Supplier</label>
                
                <input type="text" placeholder="Telp Supplier" name="telp_supplier" class="form-control" required value="<?=$row['telp_supplier']?>"> 
            </div>
            <div class="form-group ">
                <input type="text" placeholder="Kota Supplier" name="kota_supplier" class="form-control" required value="<?=$row['kota_supplier']?>"> 
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-default" style="background-color: #333; color: #fff;" value="Simpan">
                <a href="supplier.php" class="btn btn-default">Batal</a>
            </div>
        </form>
         <?php 
            }
             ?>
    </div>
</div>