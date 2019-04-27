<?php
include '../connect.php';
?>


<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">  
        <link rel="icon" type="image/png" href="../img/logo2.png">
    </head>
    <body>
        <div class="container">
            <img src="../img/Sewa.png">
                <form action="login.php" method="post">
                    <input type="text" name="username" placeholder="Username" required><br>
                    <input type="password" name="password" placeholder="Password" required><br>
                    <input type="submit" name="submit" value="Login" class="btn-login"><br><br><br>
                    <a href="form-signUp.php">Sign Up</a> 
                    <a href="../loginAdmin/form-loginAd.php">Admin</a> 
                </form>
            </div>
            </body>