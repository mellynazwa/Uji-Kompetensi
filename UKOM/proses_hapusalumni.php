<?php
include 'connection.php';

if(isset($_GET['id'])){

	$delete = mysqli_query($con, "DELETE FROM tblmahasiswa WHERE id = '".$_GET['id']."' ");
	include ("list_dataalumni.php");
}
?>