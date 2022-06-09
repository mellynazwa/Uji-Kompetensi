<?php
 session_start();

 // set session
 $_SESSION['login'] = false;
?>
<!DOCTYPE html>
<html>
<head>
<head>
<title>Login</title>
<style type="text/css">
body { font-family: Verdana; font-size: 14px; background-color: #EEE8AA; }
input, button { padding: 7px; }
button { cursor: pointer; }
table{background: #FFFFFF; border-radius: 10px;}
.container { background-color: #FFE4E1; border: 1px solid #000000; padding: 10px; width: 400px; margin: 100px auto; }
.container .form-control { margin-bottom: 10px; width: 100%; }
.container .form-control:last-child { margin-bottom: 0; }
.container .form-control input { width: 380px; }
.container .form-control button { width: 397px; }
.container .pesan { color: #FFFFFF; text-align: center; padding: 7px; background-color:#FFA07A; font-weight: bold; }
</style>
</head>
<body>
<div class="container">
<h2><center>LOGIN TO SYSTEM ALUMNI POLITEKNIK NEGERI MEDAN</center></h2>
<hr />
<form action="ceklogin.php" method="POST">
<div class="form-control">
  <input type="text" name="username" placeholder="Masukan username">
</div>
<div class="form-control">
  <input type="password" name="password" placeholder="Masukan password">
</div>
<div class="form-control">
  <button type="submit">LOGIN</button>
</div>
<?php
// jika mendapatkan parameter $_GET['p']
if(isset($_GET['p'])){
?>
<div class="pesan">
<?php echo $_GET['p']; ?>
</div>
<?php } ?>
</form>
</div>
</body>
</html>