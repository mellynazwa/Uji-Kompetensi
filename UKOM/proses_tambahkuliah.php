<?php
include("connection.php");
$nama=$_POST['nama'];
$nama_universitas=$_POST['nama_universitas'];
$jurusan=$_POST['jurusan'];

$sql="INSERT INTO tbltransaksistudilanjut(nama,nama_universitas,jurusan) values('$nama','$nama_universitas','$jurusan')";

$query=mysqli_query($con,$sql);
//echo "$sql";
if ($query){
echo "<script>window.alert('Data Berhasil Disimpan');window.location.href='list_alumnikuliah.php';</script>";
} else {
    echo "<script>window.alert('Data Gagal Disimpan');window.location.href='tambah_alumnikuliah.php';</script>";
}
