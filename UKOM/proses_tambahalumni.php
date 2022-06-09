<?php
include("connection.php");
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jeniskelamin=$_POST['jeniskelamin'];
$tanggallahir=$_POST['tanggallahir'];
$alamat=$_POST['alamat'];
$programstudi=$_POST['programstudi'];
$tahunlulus=$_POST['tahunlulus'];
$status=$_POST['status'];

$sql="INSERT INTO tblmahasiswa(nim,nama,jeniskelamin,tanggallahir,alamat,programstudi,tahunlulus,status) values('$nim','$nama','$jeniskelamin','$tanggallahir','$alamat', '$programstudi', '$tahunlulus', '$status')";

$query=mysqli_query($con,$sql);
//echo "$sql";
if ($query){
echo "<script>window.alert('Data Berhasil Disimpan');window.location.href='list_dataalumni.php';</script>";
} else {
    echo "<script>window.alert('Data Gagal Disimpan');window.location.href='tambah_alumni.php';</script>";
}
