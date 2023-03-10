<?php 
error_reporting(E_ALL ^ E_NOTICE);  
session_start();

if($_SESSION['role'] == 'admin'){
        header("location: views/home/v_home_admin.php");
        exit;
    }elseif ($_SESSION['role'] == 'owner'){
        header("location: views/home/v_home_owner.php");
        exit;
    }elseif ($_SESSION['role'] == 'kasir'){
        header("location: views/home/v_home_kasir.php");
        exit;
    }else {
        echo '';
    } 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <title>Login Laundry</title>
  </head>
  <body>
    <section class="form-02-main" style="background-image:url('assets/images/wiil.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="_lk_de">
              <div class="form-03-main">
                <div class="logo">
                  <img src="assets/images/laun.gif">
                </div>
                <form action="routers/r_login.php?aksi=login" method="post">
                <div class="form-group">
                  <input type="username" name="username" class="form-control _ge_de_ol" type="text" placeholder="Enter username" required="" aria-required="true">
                </div>

                <div class="form-group">
                  <input type="password" name="password" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true">
                </div>
                <div class="form-group">
                  <div class="_btn_04">
                    <!--<a name="login " type="submit" value="login">Login</a>-->
                    <input type="submit" name="login" value="login">
                  </div>
                </div>
</form>
    </section>
  </body>
</html>