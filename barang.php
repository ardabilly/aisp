<?php 

include_once("config/Class_Barang.php");
$db = new Class_Barang();

include_once("config/config.php");
// Mengambil kode barang baru
include_once("fungsi/nomatbrg.php");
// Mengambil kode barang masuk
include_once("fungsi/nomatbrgmasuk.php");
// Mengambil nomor pinjam
include_once("fungsi/nomatpinjam.php");


if (isset($_GET['hapus'])) {

    $db->hapus($_GET['id']);
    echo "<script>alert('barang berhasil dihapus'); window.location.href='barang.php';</script>";
}
 ?>
<html>
<head>
        <title>Aplikasi Inventaris</title>
        <?php include('includes/header.php'); ?>
</head>
<body>
    <div class="wrapper">
            <div class="col-sm-12 navbar" style="margin-left: -2px;">
                <?php include_once("includes/navbar.php"); ?>
            </div>
        <div class="row" style="">
            <div class="col-sm-3" style="margin-top: -20px;"> 
                <?php include_once("includes/sidebar.php"); ?>
            </div>
            <div class="col-sm-9">
                <div class="content">
                    <?php 

                        if (isset($_GET['page']) && $_GET['page'] == "barangbaru") {

                            include_once("barang/input_barangbaru.php");
                        }
                        else if (isset($_GET['page']) && $_GET['page'] == "update") {

                            include_once("barang/edit_barang.php");
                        }
                        else if (isset($_GET['page']) && $_GET['page'] == "barangmasuk") {

                            include_once("barang/data_barangmasuk.php");
                        }
                        else if (isset($_GET['page']) && $_GET['page'] == "barangkeluar") {

                            include_once("barang/data_barangkeluar.php");
                        }
                        else if (isset($_GET['page']) && $_GET['page'] == "inputbarangmasuk") {

                            include_once("barang/input_barangmasuk.php");
                        }
                        else if (isset($_GET['page']) && $_GET['page'] == "peminjaman") {

                            include_once("barang/data_peminjaman.php");
                        }
                        else if (isset($_GET['page']) && $_GET['page'] == "formpeminjaman") {

                            include_once("barang/form_peminjaman.php");
                        }  
                        else{
                            include_once("barang/data_barangbaru.php");
                        }

                     ?>
                
                       <?php include_once("includes/footer.php"); ?>
                </div>
            </div>
        </div>
    </div>            
</body>
</html>
<style>
.row{
    width: 100%;
}
.content
{
    padding: 30px;
    margin-left: -10%;
}
tr
{
    font-size: 13px;
}
tr td
{
    font-size: 13px;
}
.tombol-pinjam
{
    background-color: #333; color: #fff;
}
.tombol-pinjam:hover
{
    background-color: #fff; color: #333;
}

    
</style>