<html>
    <head>  
    <title>Upload Gambar</title>
    <link href="form-upload.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../img/logo2.png"> 
</head>
<body>  
<div class="con">
<div class="oi">
        <h2>Penanggung Barang Sewa</h2>
</div>
<form action="upload.php" enctype="multipart/form-data" method="POST">

        <input type="text" name="nama" placeholder="Nama...." required><br>
        <input type="text" name="email" placeholder="Email..." required><br>
        <input type="text" name="no" placeholder="No.Hp..." required><br>
        <input type="text" name="barang" placeholder="NamaBarang...." required><br>
        <input type="text" name="harga" placeholder="HargaBarang...." required><br>
        <input type="text" name="durasi" placeholder="DurasiBarang...." required><br>
        <input type="text" name="kota" placeholder="AsalKota...." required><br>


        <input type="file" name="gambar" class="btn-login">    
    
        <a href="halamanAwal.php"><button class="btn-kem">Kembali</button></a>

        <input type="submit" value="Upload" class="btn-login">

</form>
</div>
</body>
</html>