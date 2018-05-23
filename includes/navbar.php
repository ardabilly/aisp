<?php 

session_start();
if (!isset($_SESSION['username'])) {

    echo "<script>alert('silahkan login terlebih dahulu!'); window.location.href='login.php';</script>";
    exit();
}
 ?>
<div class="nav-left">
    <span class="text-header">APLIKASI INVENTARIS</span>
</div>
<div class="nav-right">
    <span class="text-logout"><a href="logout.php" onclick="return confirm('Yakin mau logout?');"><i class="fa fa-sign-out"></i>Logout</a></span>
</div>
<style>
   
</style>