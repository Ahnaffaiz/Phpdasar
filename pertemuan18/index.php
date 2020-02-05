<?php 

//cek apakah ada session login
//jika tidak ada session login maka kembali ke login
session_start();
if (!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}

require 'functions.php' ;


//pagination
//konfigurasi
//nb : LIMIT index, berapa data
//round : membulatkan ke desimal terdekat
//floor : membulatkan kebawah
//ceil : membulatkan keatas
$jumlahDataPerhalaman = 2;
$jumlahData = count(query("SELECT * FROM provinces"));
$jumlahHalaman = ceil($jumlahData/$jumlahDataPerhalaman);

//kita perlu tahu laman aktif
//menggunakan ternari = if else
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1; 
//jika get["halaman"] belum dibuat maka dikasih nilai 1, jika sudah dibuat maka sesuai yang diisi

//kita perlu awal index perhalaman
//dicari dengan algoritma (diawang")
$awalData = ($jumlahDataPerhalaman * $halamanAktif)-$jumlahDataPerhalaman;

$provinces = query("SELECT * FROM provinces ORDER BY id ASC LIMIT $awalData, $jumlahDataPerhalaman");

//apakah pencarian sudah ditekan ?
if( isset($_POST["cari"])){
    $provinces = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
</head>
<body>
<a href="logout.php">logout</a>
    <h1>daftar Provinsi Indonesia</h1>
    <a href="tambah.php">Tambahkan data provinsi</a>
    <br>
    <br>
    <form action="" method="post">
        <input type="text" name=keyword autocomplete="off" placeholder="Masukkan kata kunci" size="40">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>
    <br>
    <!-- navigasi -->
    <!-- previews -->
    <?php if($halamanAktif>1): ?>
    <a href="?halaman=<?php echo $halamanAktif-1 ?>">&laquo</a>
    <?php endif; ?>
    

    <?php for($i=1; $i<=$jumlahHalaman; $i++): ?>
    <!-- menambahkan tanda aktif -->
    <?php if($i == $halamanAktif): ?>
        <a href="?halaman=<?php echo $i; ?>" style="font-weight: bold; color: red"><?php echo $i; ?></a>
    <?php else:  ?>
        <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
    <?php endif; ?>
    <?php endfor; ?>

    <!-- next -->
    <?php if($halamanAktif<$jumlahHalaman): ?>
    <a href="?halaman=<?php echo $halamanAktif+1  ?>">&raquo</a>
    <?php endif; ?>

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
