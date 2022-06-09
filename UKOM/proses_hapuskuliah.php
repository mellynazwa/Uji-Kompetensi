<?php
include 'connection.php';

if(isset($_GET['idtransstudi'])){

	$delete = mysqli_query($con, "DELETE FROM tbltransaksistudilanjut WHERE idtransstudi = '".$_GET['idtransstudi']."' ");
	include ("list_alumnikuliah.php");
}
?>