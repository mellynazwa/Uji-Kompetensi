<?php include("connection.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Alumni POLMED</title>
	<style type="text/css">
		h2 {
			margin-top: 130px;
        }
        .table{
        	width: 1000px;
			height: auto;
        }
        .table tr th{
        	background: #35A9DB;
        	color: #fff;
        	font-weight: normal;
        }
        .table, th, td{
        	padding: 8px 5px;
        	text-align: center;
        }
        .table tr:hover{
        	background-color: #f5f5f5;
        }
        .table tr:nth-child(even){
        	background-color: #f2f2f2;

        }
	</style>

</head>
<body><center>
	<div class="container">
	<header>
		<h2> Mahasiswa Yang Telah Menjadi Alumni</h3>
	</header>

	<nav>
		<a href="index.php"> >> Kembali ke Home</a>
	</nav>

	<br>

	<table border="1" class="table">
	<thead>
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama Mahasiswa</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>Program Studi</th>
			<th> Tahun Lulus</th>
			<th> Status</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$query = mysqli_query($con, "SELECT * FROM tblmahasiswa");
		while($mhs = mysqli_fetch_array($query)){
		   echo "<tr>";

			echo "<td>".$mhs['id']."</td>";
			echo "<td>".$mhs['nim']."</td>";
			echo "<td>".$mhs['nama']."</td>";
			echo "<td>".$mhs['jeniskelamin']."</td>";
			echo "<td>".$mhs['tanggallahir']."</td>";
			echo "<td>".$mhs['alamat']."</td>";
			echo "<td>".$mhs['programstudi']."</td>";
			echo "<td>".$mhs['tahunlulus']."</td>";
			echo "<td>".$mhs['status']."</td>";



			echo "</tr>";
		}
		?>
	</tbody>
	</table>

	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>

