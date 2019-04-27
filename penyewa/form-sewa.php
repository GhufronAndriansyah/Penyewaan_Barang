<?php
include '../connect.php';
$query = "SELECT * FROM barang WHERE id_barang =".$_GET['id']."";
$sql = mysqli_query($connect,$query);
$data_sewa = mysqli_fetch_assoc($sql);
?>

<html>
<head>
   <title>Sewa Barang</title>
   <link href="form-sewa.css" rel="stylesheet">
   <link rel="icon" type="image/png" href="../img/logo2.png">
</head>
 
<body>
<div class="con">
<div class="oi">
        <h2>Penanggung Jawab</h2>
</div>
<form action="create.php" method="POST">

        <input type="text" name="nama" placeholder="Nama...." required><br>
    

        <input type="text" name="email" placeholder="Email..." required><br>
    

        <input type="text" name="alamat" placeholder="Alamat...." required><br>
    

        <input type="text" name="no" placeholder="No.Hp...." required><br>
        <input type="hidden" name="stas" value="Belum Membayar"><br>
        <input class="hancur"  name="kode" value="<?php echo $data_sewa['id_barang']; ?>"><br>
    
        <a href="halamanAwal.php"><button class="btn-kem">Kembali</button></a>
        <input type="submit" value="Kirim" class="btn-login">

</form>
</div>
<div class="con1">
<div class="oi">
        <h2>Barang Akan Disewa</h2>
</div>
    <input type="text" name="nama" readonly value="<?php echo $data_sewa['nama_milik']; ?>"><br>
    <input type="text" name="barang" readonly value="<?php echo $data_sewa['email']; ?>"><br>
    <input type="text" name="barang" readonly value="<?php echo $data_sewa['no_hp']; ?>"><br>
    <input type="text" name="barang" readonly value="<?php echo $data_sewa['nama_barang']; ?>"><br>
    

    <input type="text" readonly value="<?php echo $data_sewa['harga_barang']."/".$data_sewa['durasi_barang']; ?>"><br>



    <input type="text" readonly value="<?php echo $data_sewa['Kota'] ?>"><br>


    <input type="text" readonly name="kode" value="<?php echo $data_sewa['id_barang']; ?>"><br>
    <?php echo "<img class='back3 img1' src='images/".$data_sewa['gambar']."'>"?>

</div>
</body>
</html>