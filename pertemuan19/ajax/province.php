<?php 
require '../functions.php';

$keyword = $_GET["keyword"];

$query = " SELECT * FROM provinces WHERE 
nama LIKE '%$keyword%' 
OR ibu_kota LIKE '%$keyword%' 
OR jml_penduduk LIKE '%$keyword%'";
$provinces = query($query);
?>

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