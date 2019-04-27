<?php

include '../connect.php';

$query = "SELECT id_sewa, nama_pem, alamat_milik, no_milik, gambar_bukti, status,
          nama_barang, harga_barang, durasi_barang, Kota, gambar
          FROM pesanan LEFT JOIN barang
          USING (id_barang)
          ORDER BY id_sewa";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>
<html>
    <head>
        <title>Lihat Sewa</title>
        <link rel="stylesheet" href="hAwal.css">
        <link rel="stylesheet" href="read.css">
        <link rel="icon" type="image/png" href="../img/logo2.png">
    </head>
<body>
<ul>
    <li><img class="hiya1" src="../img/Sewa.png"></li>
    <li><a href="halamanAwal.php">Home</a></li>
    <li><a href="read.php">Lihat Sewa</a></li>
    <li><a href="form-upload.php">Upload Barang Sewa</a></li>
    <li class="as"><a href="../login/logout.php">Logout</a></li>
</ul>
<div class="kon">
    <table border='5'>
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
        <th>Batal?</th>
        <th>Kirim <br>Bukti Bayar ?</th>

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
                echo "<td>" . $data['nama_barang'] ."<img class='back5 img5' src='images/".$data['gambar']."'></td>";
                echo "<td>" . $data['harga_barang'] ."/".$data['durasi_barang']. "</td>";
                echo "<td>" . $data['Kota'] . "</td>";
                echo "<td><img class='back5 img5' src='images/".$data['gambar_bukti']."'></td>";
                echo "<td class='btn-kem'>". $data['status'] ."</td>";
                echo "<td><a class='btn-login' href='delete.php?id_sewa=" . $data['id_sewa'] ."' onclick='return confirm(\"Apakah Anda yakin ingin membatalkan pesanan?\")'>Batalkan</a></td>";
                echo "<td><a class='btn-login1' href='form-bukti.php?id_sewa=" . $data['id_sewa'] ."'>Kirim</a></td>";
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