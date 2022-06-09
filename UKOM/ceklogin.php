<?php
include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$u = mysqli_real_escape_string($con,$username);
$p = mysqli_real_escape_string($con,$password);

$sql = mysqli_query($con,'select * from tabel_admin where username="'.$u.'" and password="'.$p.'" ');
$al = mysqli_num_rows($sql);

if($al == 1) {
    session_start();
    $_SESSION['user']=$user;
    echo "<script>window.alert('Anda berhasil Sign In!');window.location.href='dashboard.php';</script>";
} else {
    echo "<script>window.alert('Gagal Sign In!');window.location.href='index.php';</script>";
}
 ?>