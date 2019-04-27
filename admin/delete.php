<?php

include '../connect.php';
$kode = $_GET['id_sewa'];

$query = "DELETE FROM pesanan WHERE id_sewa = $kode";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{
    header("location: hAdmin.php");
}
else
{
    echo "Gagal hapus data <br>";
}
echo "<a href='read.php'>Lihat Data</a>";
?>
