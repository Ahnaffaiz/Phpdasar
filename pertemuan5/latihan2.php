<?php 
//array biasanya ditulis jamak dalam bahasa inggris
$angka = [3,2,31,42,4,13,44,5,12,32,1,31];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php for($i = 0; $i<count($angka); $i++) { ?>
    <div class="kotak"><?php echo $angka[$i] ?></div>
    <?php } ?>

    <div class="clear"></div>
    <?php foreach( $angka  as $a) { ?>
        <div class="kotak"> <?php echo $a ?></div>
    <?php } ?>
</body>
</html>