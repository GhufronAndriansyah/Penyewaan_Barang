<?php
include '../connect.php';

?>

<html>
<head>
   <title>Sign Up</title>
   <link rel="stylesheet" type="text/css" href="sign.css">  
   <link rel="icon" type="image/png" href="../img/logo2.png">
</head>
 
<body>
    <div class="con">
        <div class="oi">
        <h2>Sign In</h2>
</div>
        <form action="signUp.php" method="POST">

            <input type="text" name="nama" placeholder="NamaUser" required>

            <input type="text" name="email" placeholder="Email" required>

            <input type="password" name="pass" placeholder="Password" required><br><br>

            <input type="radio" name="jk" value="laki-laki" checked > 
                Laki - Laki
            <input type="radio" name="jk" value="perempuan" > 
                Perempuan
                <br><br><br>
            <a href="form-login.php"><button class="btn-login1">Kembali</button></a>
            <input  class="btn-login" type="submit" value="Kirim">
            

        </form>
    </div>
</body>
</html>