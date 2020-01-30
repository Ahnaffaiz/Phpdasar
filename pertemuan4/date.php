<?php
    //menampilkan tanggal
    //echo date("l, d-M-y");
    //echo date("l, d-m-y", time()+60*60*24*100);

    //mktim(jam, menit, detik, tanggal, bulan, tahun)
    echo date("l", mktime(0,0,0,26,03,2000));
    //strtime() yang dimasukkan adalah string
?>