<?php

$host = "localhost";
$db = "sewa_barang";
$uname = "root";
$pass = "";

$connect = mysqli_connect($host,$uname,$pass,$db);

if(! $connect){
    echo "Koneksi Gagal :" . mysqli_connect_error();
}

?>