<?php
require 'functions.php';

if(isset($_POST["submit"])){
    if (tambah($_POST)>0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href='index.php';
        </script>
        ";
    }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data provinsi</title>
</head>
<body>
    <h1>Tambah data provinsi</h1>
    <br>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama Provinsi :</label>
                <input type="text" name="nama" placeholder="nama provinsi" id="nama" required>
            </li>
            <li>
                <label for="ibu_kota">Ibu kota :</label>
                <input type="text" name="ibu_kota" placeholder="ibu kota" id="ibu_kota" required>
            </li>
            <li>
                <label for="jml_penduduk">Jumlah Penduduk</label>
                <input type="text" id="jml_penduduk" name="jml_penduduk" placeholder="jumlah penduduk" required>
            </li>
            <li>
                <label for="logo">Logo</label>
                <input type="file" id="logo" name="logo" placeholder=logo required>
            </li>
            <li>
                <button type="submit" name=submit>Tambah</button>
            </li>
        </ul>
    </form>
</body>
</html>