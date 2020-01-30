<?php
//perulangan

//for
//for($i=0; $i<5; $i++){
//    echo "Hello word <br>";
//}

//while
//$i = 0;
//while ($i < 5){
//    echo "hai";
//    $i++
//}
//do.. while (min 1x dijalankan)
//do {

//} while ()
//foreach: pengulangan khusus array 

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
    <table border="1" cellpadding="10" cellspacing="0">
    <?php for ($i = 1; $i <=5; $i++) {?>
        <tr>
            <?php for ($j = 1; $j<=5; $j++) { //kurung kurawal buka diganti :?> 
                <td><?php echo "$i, $j"; //php echo diganti=?></td>
            <?php } //kurung kurawal endfor(dll)?>
        </tr>
    <?php } ?>
    </table>
</body>
</html>