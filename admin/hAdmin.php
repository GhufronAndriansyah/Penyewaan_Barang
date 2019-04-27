<?php
session_start();
if(!(isset($_SESSION['admin'])))
{
    header("location: ../login/form-loginAd.php");
}

include '../connect.php';

$query = "SELECT id_sewa, nama_pem, email_milik, alamat_milik, no_milik, status,
          nama_barang, gambar, harga_barang, durasi_barang, Kota, gambar_bukti
          FROM pesanan LEFT JOIN barang
          USING (id_barang)
          ORDER BY id_sewa";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>
<html>
<head>
    <link rel="stylesheet" href="../penyewa/read.css">
    <link rel="stylesheet" href="../penyewa/hAwal.css">
    <title>Sewa Barang</title>
    <link rel="icon" type="image/png" href="../img/logo2.png">
</head>
<body>
<ul>
    <li><img class="hiya1" src="../img/Sewa.png"></li>
    <li><a href="hAdmin.php">Data Sewa</a></li>
    <li class="as"><a href="../login/logout.php">Logout</a></li>
</ul>
<body>
<div class="kon">
    <table border='5' class="table">
    <h2>Data Sewa</h2>
    <tr>
        <th>No.</th>
        <th>Nama Penyewa</th>
        <th>Alamat</th>
        <th>No.Hp</th>
        <th>Barang Sewa</th>
        <th>Harga Per Durasi</th>
        <th>Kota</th>
        <th>Bukti Pembayaran</th>
        <th>Status</th>
        <th>Pengaturan</th>
    </tr>
    <?php 
        if($num > 0)
        {
            $no = 1;
            while($data = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $data['nama_pem'] . "</td>";
                echo "<td>" . $data['alamat_milik'] . "</td>";
                echo "<td>" . $data['no_milik'] . "</td>";
                echo "<td>" . $data['nama_barang'] ."<img class='back5 img5' src='../penyewa/images/".$data['gambar']."'></td>";
                echo "<td>" . $data['harga_barang'] ."/".$data['durasi_barang']. "</td>";
                echo "<td>" . $data['Kota'] . "</td>";
                echo "<td><img class='back5 img5' src='../penyewa/images/".$data['gambar_bukti']."'></td>";
                echo "<td class='btn-kem'>". $data['status'] ."</td>";
                echo "<td><a class='btn-login' href='delete.php?id_sewa=" . $data['id_sewa'] ."' onclick='return confirm(\"Tolong Hubungi Pelanggan Jika Ingin Membatalkan Pesanan\")'>Hapus</a><br><br><br><br>";
                echo "<a class='btn-login1 mar' href='form-edit.php?id_sewa=" . $data['id_sewa'] ."'>Edit</a></td>";
                echo "</tr>";
                $no++;
            }
        }
        else
        {
            echo "<td colspan='8'><p align='center'>Anda Belum Menyewa</p></td>";
        }
    ?>
    </table>
    </div>