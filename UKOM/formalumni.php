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
    <form action="proses_formalumni.php" method="POST">
    <fieldset>
        <table class="table">
            <tr>
                <td><label >Nim</label></td>
				<td><input type="text" name="nim" class="input" required></td>
			</tr>   
            <tr>
                <td><label>Nama</label></td>
                <td><input type="text" name="nama" class="input" required></td>
            </tr>
            <tr>
                <td><label>Jenis Kelamin</label></td>
                <td><input type="radio" class="input" name="jeniskelamin" value="Laki-Laki" required>Laki-Laki
                <input type="radio" class="input" name="jeniskelamin" value="Perempuan" required>Perempuan</td>
            </tr>
            <tr>
                <td><label> Tanggal Lahir</label></td>
                <td><input type="date" name="tanggallahir" class="input" required></td>
            </tr>
            <tr>
                <td><label>Alamat</label></td>
                <td><input type="text" name="alamat" class="input" required></td>
            </tr>
            <tr>
                <td><label>Program Studi</label></td>
                <td><select name="programstudi" class="input" required>
                    <option value="">Pilih Program Studi</option>
                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                    <option value="Teknik Komputer">Teknik Komputer</option>
                    <option value="Teknik Elektronika">Teknik Elektronika</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Administrasi bisnis">Administrasi Bisnis</option>
                    <option value="Akuntansi">Akuntansi</option>
                    </select>
                </td>
            </tr>
             <tr>
                <td><label>Tahun Lulus</label></td>
                <td><select name="tahunlulus" class="input" required>
                    <option value="">Tahun Lulus </option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Status</label></td>
                <td><select name="status" class="input" required>
                    <option value="">Status </option>
                    <option value="Kuliah">Kuliah</option>
                    <option value="Bekerja">Bekerja</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" class="submit" value="Simpan"></td>
            </tr>
 </fieldset>
 </form>
 </body>
</html>