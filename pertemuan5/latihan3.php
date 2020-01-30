<?php 
$mahasiswa = [["sandika", "23113231", "Teknik Informatika", "sandikagalih.unpas.ac.id"],
                ["Faiz", "13131432", "Teknik Informatika", "faizahnaf.unpas.ac.id"],
                ["Galih", "4322", "Teknik Informatika", "sandikagalih.unpas.ac.id"],
            ]

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
            <li>Nama    : <?php echo $mhs[0] ?></li>
            <li>NIM     : <?php echo $mhs[1] ?></li>
            <li>Jurusan : <?php echo $mhs[2] ?></li>
            <li>email   : <?php echo $mhs[3] ?></li>
        </ul>
    <?php endforeach ?>
    
</body>
</html>