<?php 

include_once("config/Class_Stok.php");
$db = new Class_Stok();

include_once("config/config.php");
include_once("fungsi/nomatbrg.php");
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
                        else{
                            include_once("stok/data_stok.php");
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