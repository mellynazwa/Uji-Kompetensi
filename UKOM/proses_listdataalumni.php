<?php
include('connection.php');
$id=$_GET['id'];
$nama=$_GET['nama'];
$jenisKelamin=$_GET['jeniskelamin'];
$tanggallahir=$_GET['tanggallahir'];
$alamat=$_GET['alamat'];
$programstudi=$_GET['programstudi'];
$tahunlulus=$_GET['tahunlulus'];
$Status=$_GET['status'];
//query update
$query = "UPDATE tblmahasiswa SET id='$id' , nama='$nama', jeniskelamin='$jeniskelamin', tanggallahir='$tanggallahir', alamat='$alamat', programstudi='$programstudi', tahunlulus='$tanggallahir', status='$status' WHERE id='$id' order by id DESC";
if (mysqli_query($con, $query)) {
    # credirect ke page index
    header("location:list_dataalumni.php");    
}
else{
    echo "ERROR, data gagal diupdate". mysqli_error();
}
?>