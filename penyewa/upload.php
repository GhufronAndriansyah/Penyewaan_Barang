<?php
include "../connect.php";
$nama_milik = $_POST['nama'];
$email = $_POST['email'];
$no = $_POST['no'];
$barang = $_POST['barang'];
$harga = $_POST['harga'];
$durasi = $_POST['durasi'];
$kota = $_POST['kota'];
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$path = "images/".$nama_file;
if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ 
    if($ukuran_file <= 1000000){ 
        if(move_uploaded_file($tmp_file, $path)){ 
            $query = "INSERT INTO barang VALUES('','$nama_milik','$email','$no','$barang','$harga','$durasi',
            '$kota','".$nama_file."','".$ukuran_file."','".$tipe_file."')";     
            $sql = mysqli_query($connect, $query);            
            if($sql){ 
                header("location: halamanAwal.php"); 
    
                }else{             
                echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";        
                echo "<br><a href='read.php'>Kembali Ke Form</a>";      
                }    
                }
                else{     
                     echo "Maaf, Gambar gagal untuk diupload.";      
                     echo "<br><a href='form.php'>Kembali Ke Form</a>";    
                     }}else{    
                         echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";    
                         echo "<br><a href='form.php'>Kembali Ke Form</a>";  
                         }}else{  
                             echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";  
                             echo "<br><a href='form.php'>Kembali Ke Form</a>";}
                             ?>