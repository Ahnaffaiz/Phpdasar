<?php 
//array
//tipe data boleh beda

//cara lama
$hari = array("Senin", "rabu", "rabu");
//cara baru


//menampilkan array dilayar
//var_dump
//print_r
print_r($hari);
echo $bulan[0];

$bulan = ["januari", "februari", "maret"];
for ($i=0; $i<count($bulan); $i++) {
    echo $bulan[$i];
    echo "<br>";
}

//menambahkan element
$hari[] = "kamis";
?>

