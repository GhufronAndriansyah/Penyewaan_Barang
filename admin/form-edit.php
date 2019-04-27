<?php 

include '../connect.php';

$id_sewa = $_GET['id_sewa'];

$query = "SELECT * FROM pesanan WHERE id_sewa = $id_sewa";

$result = mysqli_query($connect, $query);

$data = mysqli_fetch_assoc($result);

?>
<html>
<head>
   <title>Belajar Membuat Form pada HTML</title>
   <link href="../penyewa/form-sewa.css" rel="stylesheet">
   <link rel="icon" type="image/png" href="../img/logo2.png">
</head>
 
<body>
<div class="con">
<div class="oi">
        <h2>Penanggung Jawab</h2>
</div>
<form action="edit.php" method="POST">

        <input type="text" name="nama" placeholder="Nama...." value="<?php echo $data['nama_pem']; ?>"><br>
    

        <input type="text" name="email" placeholder="Email..." value="<?php echo $data['email_milik']; ?>"><br>
    

        <input type="text" name="alamat" placeholder="Alamat...." value="<?php echo $data['alamat_milik']; ?>"><br>
    

        <input type="text" name="no" placeholder="No.Hp...." value="<?php echo $data['no_milik']; ?>"><br>
        <input type="radio" name="stas" value="Belum Membayar" checked > 
        Belum Membayar
            <input type="radio" name="stas" value="Tunggu Proses" > 
            Tunggu Proses
            <input type="radio" name="stas" value="Sudah Membayar" > 
            Sudah Membayar
        <input class="hancur"  name="kode" value="<?php echo $data['id_sewa']; ?>"><br>
    
        <a href="halamanAwal.php"><button class="btn-kem">Kembali</button></a>
        <input type="submit" value="Kirim" class="btn-login">

</form>
</div>

</form>
</div>
</body>
</html>