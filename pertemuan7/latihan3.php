<?php 
//isset = untuk mengecek apakah variable pernah dibuat ?
if( !isset($_GET["nama"]) ||
    !isset($_GET["ibukota"]) ||
    !isset($_GET["jml_penduduk"]) ||
    !isset($_GET["logo"]) ||
    !isset($_GET["logo"])){
        //redirect (dipaksa kehalaman tertentu)
        header("location: latihan2.php");
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <img src="logo/<?php echo $_GET["logo"] ?>"  alt="">
        </li>
        <li>Nama Provinsi: <?php echo $_GET["nama"]?></li>
        <li>Ibu Kota: <?php echo $_GET["ibukota"]?></li>
        <li>Jumlah Penduduk: <?php echo $_GET["jml_penduduk"] ?> Jiwa</li>
    </ul>
    <a href="latihan2.php">kembali</a>
</body>
</html>