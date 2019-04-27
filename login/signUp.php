<?php

include '../connect.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$jk = $_POST['jk'];

$query = "INSERT INTO user VALUES ('','$nama','$email','$pass','$jk')";

$result = mysqli_query($connect,$query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{ header("location:form-login.php");}
else
{ echo "Gagal tambah data";}

echo "<a href='read.php'>Lihat Data</a>";