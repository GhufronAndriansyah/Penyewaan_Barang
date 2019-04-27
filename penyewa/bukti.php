<?php

include '../connect.php';

$id_sewa = $_POST['id_sewa'];
$stas= $_POST['stas'];
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$path = "images/".$nama_file;
if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ 
    if($ukuran_file <= 1000000){ 
        if(move_uploaded_file($tmp_file, $path)){ 
            $query = "UPDATE pesanan SET gambar_bukti = '$nama_file',ukuran_bukti = '$ukuran_file',tipe_bukti = '$tipe_file', status='$stas' WHERE id_sewa = $id_sewa";
            $sql = mysqli_query($connect, $query);            
            if($sql){ 
                header("location: read.php");
                }else{             
                echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";        
                echo "<br><a href='read.php'>Kembali Ke Form</a>";      
                }    
                }
                else{     
                     echo "Maaf, Gambar gagal untuk diupload.";      
                     echo "<br><a href='read.php'>Kembali Ke Form</a>";    
                     }}else{    
                         echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";    
                         echo "<br><a href='read.php'>Kembali Ke Form</a>";  
                         }}else{  
                             echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";  
                             echo "<br><a href='read.php'>Kembali Ke Form</a>";}
                             ?>
