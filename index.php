<?php 

include_once("config/Class_User.php");
$db = new Class_User();

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
                <div class="content" style="margin-top: -20px;">
                    <?php 
                        if (isset($_GET['page']) && $_GET['page'] == "pengaturan") {

                            include_once("pengaturan/ganti_password.php");
                        }
                        else{
                     ?>
                    <div class="alert alert-info">
                        Selamat Datang <strong>ADMINISTRATOR</strong> 
                    </div>
                    <div class="barangmasuk text-center">
                        <span class="">
                            
                        </span>
                    </div>
                    <?php } ?>
                    
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
    padding: 50px;
    margin-left: -10%;
}
    
</style>