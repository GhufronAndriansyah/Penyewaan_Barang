<?php

include '../connect.php';

$nama_pem = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$no = $_POST['no'];
$stas = $_POST['stas'];
$kode = $_POST['kode'];

$query = "INSERT INTO pesanan VALUES ('','$nama_pem','$email',
'$alamat','$no','','','','$stas','$kode')";

$result = mysqli_query($connect,$query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{ header('location: halamanAwal.php');}
else
{ echo "Gagal tambah data";}

echo "<a href='read.php'>Lihat Data</a>";
