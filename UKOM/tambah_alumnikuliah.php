<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulir Data Alumni</title>
    <style type="text/css">
        .container {
            width: 50%;
            margin: auto;
            background-color: #49457B;
            color: white;
        }
        .tulisan{
            text-align: center;
            font-family: lato;
            font-weight: bold;
            padding-top: 50px;
        }
        table{
            margin: 100px;
        }
        .table td{
            padding-bottom: 20px;
        }
        .input{
            border-radius: 7px;
        }
        .submit{
            padding: 5px 20px;
            font-family: lato;
            font-weight: bold;
            border-radius: 5px;
        }
    </style>
</head>
<body background="assets/images/backgroundd.jpg">
    <div class="container">
    <header>
    <h2 class="tulisan">Formulir Data Alumni</h3>
    </header>
    <form action="proses_tambahkuliah.php" method="POST">
    <fieldset>
        <table class="table">
            <tr>
                <td><label >Nama</label></td>
                <td><input type="text" name="nama" class="input" required></td>
            </tr>   
            <tr>
                <td><label>Nama Universitas</label></td>
                <td><input type="text" name="nama_universitas" class="input" required></td>
            </tr>
            <tr>
                <td><label>Jurusan</label></td>
                <td><input type="text" name="jurusan" class="input" required></td>
            </tr>
            
            <tr>
                <td><input type="submit" name="submit" class="submit" value="Simpan"></td>
            </tr>
 </fieldset>
 </form>
 </body>
</html>