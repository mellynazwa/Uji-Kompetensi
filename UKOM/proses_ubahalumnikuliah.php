<?php
include('connection.php');
$idtransstudi=$_GET['idtransstudi'];
$nama=$_GET['nama'];
$nama_universitas=$_GET['nama_universitas'];
$jurusan=$_GET['jurusan'];
//query update
$query = "UPDATE tbltransaksistudilanjut SET idtransstudi='$idtransstudi' , nama='$nama', nama_universitas='$nama_universitas', jurusan='$jurusan'  WHERE idtransstudi='$idtransstudi' order by idtransstudi DESC";
if (mysqli_query($con, $query)) {
    # credirect ke page index
    header("location:list_alumnikuliah.php");    
}
else{
    echo "ERROR, data gagal diupdate". mysqli_error();
}
?>