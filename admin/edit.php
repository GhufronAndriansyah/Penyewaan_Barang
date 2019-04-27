<?php

include '../connect.php';

$nama_pem = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$no = $_POST['no'];
$stas = $_POST['stas'];
$id_sewa = $_POST['kode'];

$query = "UPDATE pesanan SET nama_pem = '$nama_pem',email_milik = '$email',alamat_milik = '$alamat', no_milik = '$no' ,status= '$stas' WHERE id_sewa = $id_sewa";
$result = mysqli_query($connect,$query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{ 
    header('location: hAdmin.php');
}
else
{ 
    echo "Gagal tambah data";
}
