<?php 
require 'functions.php' ;
$provinces = query("SELECT * FROM provinces")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>daftar Provinsi Indonesia</h1>
    <a href="tambah.php">Tambahkan data provinsi</a>
    <br>
    <br>
    <table cellpadding="10" cellspacing="1" border="1">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Logo</th>
            <th>Nama</th>
            <th>Ibu Kota</th>
            <th>Jumlah Penduduk</th>
        </tr>
        <?php
        $i=1; 
        foreach ($provinces as $province  ): ?>
        
        <tr>
            <td><?php echo $i ?></td>
            <td>
                <a href="ubah.php?id=<?php echo $province["id"] ?>">Ubah </a>|
                <a href="hapus.php?id=<?php echo $province["id"] ?>" onclick="return confirm('yakin?');"> Hapus</a></td>
            <td><img src="logo/<?php echo $province["logo"] ?>" width="50"></td>
            <td><?= $province["nama"] ?></td>
            <td><?= $province["ibu_kota"] ?></td>
            <td><?= $province["jml_penduduk"] ?></td>
        </tr>
        <?php $i++;
         endforeach?>
        
        
    </table>
    
</body>
</html>
