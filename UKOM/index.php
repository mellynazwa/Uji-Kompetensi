<?php
session_start();
//koneksi ke database
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Selamat Datang Di Sistem Informasi Akademik POLMED</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    
    
    <?php include 'menu.php'; ?>

<!-- konten -->
<section class="konten">

    <div class="container">
        <h2><strong><center>WELCOME TO WEBSITE AKADEMIK ALUMNI </center></strong></h2>
        <h3><strong><center>POLITEKNIK NEGERI MEDAN </center></strong></h3>
    <br></br>
    <br></br>


   </div>
   <center>
   <img src="assets/images/fotoalumnii.jpg" alt="Image" width="600" class="img-responsive" &nbsp; 
  <br>
  <h3><strong><center>Data Alumni Politeknik Negeri Medan </center></strong></h3>
      <a href="listalumni.php"class="btn btn-default"><i class="glyphicon glyphicon-tasks"></i> Tampilkan</a>
  </br>
  <br></br>
     </center>
  </br>

    </br>
</section>
        <div class="col-md-5 col-md-push-7 animate-box">
          <div class="gtco-contact-info">
            <h3><strong>Kontak Informasi</strong></h3>
            <ul>
              <li class="glyphicon glyphicon-tag"><a href="https://www.google.com/maps/place/Politeknik+Negeri+Medan/@3.5629569,98.655806,15z/data=!4m5!3m4!1s0x0:0xc5edba7e577329d2!8m2!3d3.5629569!4d98.655806"> Politeknik Negeri Medan, Sumatera Utara</li><br>
              <li class="glyphicon glyphicon-phone"><a href="tel://6281361308488">    081361308488</a></li><br>
              <li class="glyphicon glyphicon-user"><a href="https://www.instagram.com/gift.ittou/">  alumnipolmed@gmail.com</a></li><br>
            </ul>
          </div>
        </div>
</body>
</html>