<?php 

include_once("config/Class_Supplier.php");
$db = new Class_Supplier();

include_once("config/config.php");
include_once("fungsi/nomatsupplier.php");


if (isset($_GET['hapus'])) {

    $db->hapus($_GET['id']);
    echo "<script>alert('data supplier berhasil dihapus'); window.location.href='supplier.php';</script>";
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

                        if (isset($_GET['page']) && $_GET['page'] == "supplierbaru") {

                            include_once("supplier/input_supplier.php");
                        }
                        else if (isset($_GET['page']) && $_GET['page'] == "updatesupplier") {

                            include_once("supplier/edit_supplier.php");
                        }
                        else{
                            include_once("supplier/data_supplier.php");
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
    
</style>