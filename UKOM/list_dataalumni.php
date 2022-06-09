<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Alumni POLMED</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Hi, Welcome! </a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="dashboard.php">Home</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="list_dataalumni.php">Data Alumni</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="list_alumnikuliah.php">Alumni Lanjut Kuliah</a></li>
                    </ul>
                </div>
            </div>
        </nav>
            <!-- end header inner -->
            <!-- end header -->
            <SPAN></SPAN>
   <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <br>
                     <br>
                     <h2>DATA ALUMNI</h2>
                     <div class="titlepage">
                     <p></p>
             
                     
                     <div>
                        
<?php 

// koneksi
include("connection.php");
if (isset($_POST['submit'])) {
   $cari=$_POST['pencarian'];
   // perintah tampil semua data
   if (!empty($cari)) {
      // perintah cari  data berdasarkan kode barang
      $q = mysqli_query($con, "SELECT * FROM tblmahasiswa WHERE id like'%$cari%' or nim like'%$cari%' or nama like'%$cari' ");
   } else {
      // perintah tampil semua data
      $q = mysqli_query($con, "SELECT * FROM tblmahasiswa order by id desc");
   }
}
else
{
$q = mysqli_query($con, "SELECT * FROM tblmahasiswa order by id desc");
   }

// hitung jumlah baris data
$s = $q->num_rows;



?>

<div class="container mt-5">
      <div class="card col-md-12 mx-auto mt-3">
         <div class="card-body">
            <div class="row">
               <div class="col-md-4 pt-2">
              <div>
              </div>
               <div class="col-md-8">
               </div>
                 <form method="POST" action="" class="form-inline">
                     <label for="date1">Pencarian Data&nbsp;&nbsp;&nbsp;</label>
                     <input type="text" name="pencarian" placeholder="Pencarian Data Alumni"/>
                     &nbsp;
                     <button type="submit" name="submit" class="btn btn-primary">Tampilkan</button>
                  </form> 
               </div>
            </div>

             <div class="best_text">

         <right>
                         
                              
<div class="best_text">
                               <a href="tambah_alumni.php">Tambah
                               </a>
                               </div> </right>
                           
                           </right>
                           </div>
      


            <div class="mt-3" style="max-height: 750px; overflow-y: auto;">
               <table class="table table-bordered">
                  <tr>
                     <th><center>No</center></th>
                     <th><center>NIM</center></th>
                     <th><center>Nama </center></th>
                     <th><center>Jenis Kelamin</center></th>
                     <th><center>Tanggal Lahir</center></th>
                     <th><center>Alamat</center></th>
                     <th><center>Program Studi</center></th>
                     <th><center>Tahun Lulus</center></th>
                     <th><center>Status</center></th>
                      <th><center>Opsi</center></th>
                     </tr>

                  <?php
                  
                  $no = 1;
                  while ($r = $q->fetch_assoc()) {
                  ?>

                  <tr>
                     <td><?= $no++ ?></td>
                     <td><?= $r['nim'] ?></td>
                     <td><?= $r['nama'] ?></td>
                     <td><?= $r['jeniskelamin'] ?></td>
                     <td><?= $r['tanggallahir'] ?></td>
                     <td><?= $r['alamat'] ?></td>
                     <td><?= $r['programstudi'] ?></td>
                     <td><?= $r['tahunlulus'] ?></td>
                     <td><?= $r['status'] ?></td>
                     <td>
                     <a href="proses_hapusalumni.php?id=<?php echo $r['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus')"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                     <a href="#" class= "btn btn-warning" data-toggle="modal" data-target="#editdata<?php echo $r['id']; ?>"><i class="glyphicon glyphicon-edit"></i> Ubah</a>
                     <!-- Modal Edit Mahasiswa-->
            <div class="modal fade" id="editdata<?php echo $r['id']; ?>" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4>Update Data Alumni</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                  </div>
                  <div class="modal-body">
                    <form role="form" action="proses_ubahdataalumni.php" method="get">
                        <?php
                        $id = $r['id']; 
                        $query_edit = mysqli_query($con, "SELECT * FROM tblmahasiswa WHERE id='$id'");
                        while ($row = mysqli_fetch_array($query_edit)) {  
                        ?>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                         <div class="form-group">
                          <label>ID</label>
                          <input type="text" name="id" class="form-control" value="<?php echo $row['id']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>NIM</label>
                          <input type="text" name="nim" class="form-control" value="<?php echo $row['nim']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Nama </label>
                          <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <input type="text" name="jeniskelamin" class="form-control" value="<?php echo $row['jeniskelamin']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <input type="text" name="tanggallahir" class="form-control" value="<?php echo $row['tanggallahir']; ?>">      
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <input type="text" name="alamat" class="form-control" value="<?php echo $row['alamat']; ?>">      
                        </div>
                         <div class="form-group">
                          <label>Program Studi</label>
                          <input type="text" name="programstudi" class="form-control" value="<?php echo $row['programstudi']; ?>">      
                        </div>
                         <div class="form-group">
                          <label>Tahun Lulus</label>
                          <input type="text" name="tahunlulus" class="form-control" value="<?php echo $row['tahunlulus']; ?>">      
                        </div>
                         <div class="form-group">
                          <label>Status</label>
                          <input type="text" name="status" class="form-control" value="<?php echo $row['status']; ?>">      
                        </div>
                        <div class="modal-footer">  
                          <button type="submit" class="btn btn-success">Update</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        <?php 
                        }
                        ?>        
                      </form>
                  </div>
                </div>
              </div>   
              </div>
              </div>
                     </td>
                     </tr>

                  <?php       
                  }
                  ?>

               </table>
            </div>
         </div>
          
                           <br> 
                           </br>
                             
                           </div>
                        </div>
                        </div>

                     </div>

                

         </div>
      </div>

      
</script>
</body>
</html>