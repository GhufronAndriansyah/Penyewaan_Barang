<?php
session_start();
if(!(isset($_SESSION['user'])))
{
    header("location: ../login/form-login.php");
}


include '../connect.php';

$query = "SELECT * FROM barang";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>
<html>
<head>
    <link rel="stylesheet" href="hAwal.css">
    <title>Sewa Barang</title>
    <link rel="icon" type="image/png" href="../img/logo2.png">
</head>
<body>
<ul>
    <li><img class="hiya1" src="../img/Sewa.png"></li>
    <li><a href="halamanAwal.php">Home</a></li>
    <li><a href="read.php">Lihat Sewa</a></li>
    <li><a href="form-upload.php">Upload Barang Sewa</a></li>
</div>
    <li class="as"><a href="../login/logout.php">Logout</a></li>
</ul>
<div class="contain">
    <form action="#">
        <h2>Cari Sewaan</h2>
        <input type="text" name="nama"><br>
        <button type="submit" class="sub">SEARCH</button>
        <br><br>
    </form>
</div>
<div class="back1">
    <div class="prd">
        <h2>Produk Disewakan</h2>
    </div>

    <div class="back2">
 <?php
 if($num > 0){
    while($data = mysqli_fetch_array($result)){
 ?>
    <div class="back3">
            <?php echo "<img class='img1' src='images/".$data['gambar']."'>"?>
            <div class="text1">
            <?php echo  "<h2>".$data['nama_barang']."</h2>" ;
            echo  "<h5>".$data['harga_barang'] ."/".$data['durasi_barang']."</h5>";
            echo "<h5>" . $data['Kota'] . "</h5>";
            echo "<a href='form-sewa.php?id=". $data['id_barang'] ."'<button class='sub1' type='sumbit'>Sewa</button></a>";
            ?>
            </div>       
        </div>
    <?php }
 }
        
?>
</div>
</div>
<div class="foo">
      <div class="col">
      LOKASI KAMI
      <p>Jl. Danau Tambingan Sawojajar<br>
      Kota Malang</p>
      <p>085326523***</p>
      ghufronandri27@gmail.com
    </div>
    <div class="col">
      <span>MEDIA SOSIAL</span><br><br>
      <a href="#"><img class="poto1" src="../img/ig.png"></a>
      <a href="#"><img class="poto1" src="../img/facebook.png"></a>
      <a href="#"><img class="poto1" src="../img/twitter-icon-9.png"></a>
    </div>
    <div class="col">
        <a href="https://smktelkom-mlg.sch.id/">
        <img class="poto2" src="../img/Fav.png">
        </a>
    </div>
        <div class="col">
        <a href="halamanAwal.php">
        <img class="poto2" src="../img/sewa.png">
        </a>
      </div>
    </div>
    <div class="footers">
       &copy Tugas Akhir 2019
      </div>
</body>
</html>
