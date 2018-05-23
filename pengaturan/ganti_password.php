<?php 
$id = $_SESSION["id_user"];

$password_lama = "";
if (isset($_POST["password_lama"]) && strlen(trim($_POST["password_lama"])) !=0)
    $password_lama = trim($_POST["password_lama"]);


$password_baru = "";
if (isset($_POST["password_baru"]) && strlen(trim($_POST["password_baru"])) !=0)
    $password_baru = trim($_POST["password_baru"]);


$konfirmasi_password = "";
if (isset($_POST["konfirmasi_password"]) && strlen(trim($_POST["konfirmasi_password"])) !=0)
    $konfirmasi_password = trim($_POST["konfirmasi_password"]);
 ?>
<h3>Pengaturan</h3>
<hr>
<div class="panel panel-default col-sm-4 " style="margin-left: 34%;">
    <div class="panel-body">
        <form method="post" enctype="multipart/form-data">
            <?php 

            if (isset($_POST["submit"])) {

                if (strlen($password_lama) !=0 && !$db->cek_password($id,$password_lama)) {

                    echo "<div class='alert alert-danger'>Password lama salah!</div>";
                }
                elseif ($password_baru !== $konfirmasi_password) {
                    echo "<div class='alert alert-info'>Password tidak sama!</div>";
                }
                else{
                    $db->update_password($_POST['password_baru'],$id);   
                    echo"<div class='alert alert-success'>Change Password Berhasil!</div>";

                }
            }

             ?>
            <div class="form-group ">
                <label for="">Password lama</label>
                <input type="password" placeholder="Masukan password lama" name="password_lama" class="form-control" required> 
            </div>
            <div class="form-group ">
                <label for="">Password Baru</label>
                <input type="password" placeholder="Masukan Password Baru" name="password_baru" class="form-control" required> 
            </div>
            <div class="form-group ">
                <label for="">Cek Password Baru</label>
                <input type="password" placeholder="Masukan Ulang Password Baru" name="konfirmasi_password" class="form-control" required> 
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-default" style="background-color: #333; color: #fff;" value="Simpan">
                <a href="index.php" class="btn btn-default">Batal</a>
            </div>
        </form>
    </div>
</div>