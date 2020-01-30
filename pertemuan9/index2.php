<?php 
//koneksi ke database
$conn = mysqli_connect ("localhost", "root", "", "phpdasar");

//ambil data provinces
$result = mysqli_query($conn, "SELECT * FROM provinces");

//menampilkan data provinces
//ambil data (fetch) privince dari object result
/*
mysqli_fetch_row();  #mengembalikan array numerik, index sesuai urutan pada table
mysqli_fetch_assoc(); #mengembalikan array associatif, index sesuai titlenya
mysqli_fetch_array(); #mengembalikan array keduanya numerik dan associatif
mysqli_fetch_object(); #memanggilnya dengan panah bukan index
*/
//menggunakan looping
// $province = mysqli_fetch_assoc($result);
// echo $province["nama"]
// ?>
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
        while ($province = mysqli_fetch_assoc($result)): ?>
        
        <tr>
            <td><?php echo $i ?></td>
            <td><a href="">Ubah </a>|<a href=""> Hapus</a></td>
            <td><img src="logo/<?php echo $province["logo"] ?>" width="50"></td>
            <td><?= $province["nama"] ?></td>
            <td><?= $province["ibu_kota"] ?></td>
            <td><?= $province["jml_penduduk"] ?></td>
        </tr>
        <?php $i++;
         endwhile?>
        
        
    </table>
    
</body>
</html>
