<?php 

include '../connect.php';

$id_sewa = $_GET['id_sewa'];

$query = "SELECT * FROM pesanan WHERE id_sewa = $id_sewa";

$result = mysqli_query($connect, $query);

$data = mysqli_fetch_assoc($result);

?>
<html>
    <head>  
    <title>Upload Gambar</title>
    <link href="form-upload.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../img/logo2.png">
</head>
<body class="body1">  
<div class="con1">
<div class="oi">
        <h2>Foto Bukti Pembayaran</h2>
</div>
<form action="bukti.php" enctype="multipart/form-data" method="POST">
<input type="hidden" name="id_sewa" value="<?php echo $data['id_sewa'];?>">       
<input type="file" name="gambar" class="btn-login">
<input type="hidden" name="stas" value="Tunggu Proses"><br>  
<a href="read.php"><button class="btn-kem">Kembali</button></a>
<input type="submit" value="Upload" class="btn-login">

</form>
</div>
</body>
</html>