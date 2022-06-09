<?php 
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$jeniskelamin=$_POST['jeniskelamin'];
		$tanggallahir=$_POST['tanggallahir'];
		$alamat=$_POST['alamat'];
		$programstudi=$_POST['programstudi'];
		$tahunlulus=$_POST['tahunlulus'];
		$status=$_POST['status'];
		

			include("connection.php");
			//save to database
			$query="INSERT INTO tblmahasiswa(nim,nama,jeniskelamin,tanggallahir,alamat,programstudi,tahunlulus,status) values('$nim','$nama','$jeniskelamin','$tanggallahir','$alamat', '$programstudi', '$tahunlulus', '$status')";
		
		mysqli_query($con, $query);
		
			 
			include ("listalumni.php");
		
?>