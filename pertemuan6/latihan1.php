<?php

//array assosiatif

$mahasiswa = [
        ["nama" => "sandika Galih", 
        "nrp" => "0989809",
         "email" => "sandikagalih.unpas.com", 
         "jurusan"=>"teknik informatika",
         "img" => "angga.png"],

         ["nama" => "faiz",
         "nrp" => "128192",
         "email" => "faiz.uns.ac.id",
         "jurusan" => "pend TIK",
         "img" => "michele.png"]
]; 
echo $mahasiswa[1]["jurusan"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 3</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) :?>
        <ul>
            <li>
                <img src="img/<?php echo $mhs["img"] ?>" alt="">
            </li>
            <li>Nama    : <?php echo $mhs["nama"] ?></li>
            <li>NIM     : <?php echo $mhs["nrp"] ?></li>
            <li>Jurusan : <?php echo $mhs["email"] ?></li>
            <li>email   : <?php echo $mhs["jurusan"] ?></li>
            
        </ul>
    <?php endforeach ?>
    
</body>
</html>