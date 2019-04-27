<?php
include '../connect.php';
?>


<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="styleAd.css"> 
        <link rel="icon" type="image/png" href="../img/logo2.png"> 
    </head>
    <body>
        <div class="container">
            <img src="../img/admin_png_17460.png">
            <img src="../img/Sewa.png">
                <form action="loginAd.php" method="post">
                    <input type="text" name="userAd" placeholder="UserAdmin" required><br>
                    <input type="password" name="passwordAd" placeholder="PasswordAdmin" required><br>
                    <a href="../login/form-login.php"><button class="btn-login1">Kembali</button></a>
                    <input type="submit" name="submit" value="Login" class="btn-login"><br><br><br>
                </form>
            </div>
            </body>