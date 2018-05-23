<?php 
include_once('config/Class_User.php');
$db = new Class_User();

$username = "";
if (isset($_POST['username']) && strlen(trim($_POST['username'])) !=0)
    $username = trim($_POST['username']);

$password = "";
if (isset($_POST['password']) && strlen(trim($_POST['password'])) !=0)
    $password = trim($_POST['password']);

session_start();

  if (isset($_SESSION['username'])) {
    echo "<script>alert('Anda sudah login!'); window.location.href='index.php';</script>";
  }
 ?>
<html>
<head>
        <title>Login - Aplikasi Inventaris</title>
        <?php include('includes/header.php'); ?>
</head>
<body>
    <div class="wrapper">
        <div class="col-sm-12 navbar">
        <div class="nav-left">
            <span class="text-header">APLIKASI INVENTARIS</span>
        </div>
        </div>
        <div class="col-sm-6 col-sm-offset-3 " style="padding: 100px;">
            <?php 
                if (isset($_POST['submit'])) {

                    if (strlen($username) != 0 && strlen($password) != 0 && !$db->login($username,$password)) {

                        echo "<div class='alert alert-danger text-uppercase'>username atau password salah</div>";
                    }
                    else{

                        $db->login($_POST['username'],$_POST['password']);
                        // echo "<script>alert('Login success');</script>";
                    }
                }

             ?>
            <div class="panel panel-default">
                <div class="panel-heading text-center" style="padding:20px; background-color: #333;">
                        <span class="login-text">Login Administrator</span>
                </div>
                <div class="panel-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username" style="height: 40px;" required autofocus>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" style="height: 40px;" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-default" type="submit" name="submit"><i class="fa fa-sign-in"></i> Login</button>
                            <span class="text-lupa"><a href="">Lupa password?</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include_once("includes/footer.php"); ?>
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
.login-text
{
    text-transform: uppercase;
    color: #fff;
    font-size: 20px;
}
.btn
{
    background-color: #286090;
    color: #fff;
}
.btn:hover
{
    color: #fff;
    background-color: #333;
}
.text-lupa a
{
    float: right;
}
.text-lupa a:hover
{
    text-decoration: none;
    color: red;
}
.footer
{
    font-size: 15px;
    margin-left: 23%;
}
    
</style>