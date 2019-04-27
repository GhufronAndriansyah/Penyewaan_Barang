<?php
session_start();
include '../connect.php';

$useradmin = $_POST['userAd'];
$password = $_POST['passwordAd'];

if($useradmin == "" || $password == "")
{
    header("location: form-loginAd.php");
}
else
{
    $query = "SELECT * FROM admin WHERE user_admin = '$useradmin' AND password = '$password'";
    $result = mysqli_query($connect,$query);

    $num = mysqli_num_rows($result);

    if($num == 1)
    {
        header("location: ../Admin/hAdmin.php");
        $_SESSION['admin'] = $useradmin;
    }
    else
    {
        header("location: form-loginAd.php");
    }
}
?>