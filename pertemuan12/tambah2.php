<?php 
//buat koneksi
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
//cek apakah tombol submit sudah ditekan belum
if(isset($_POST["submit"])){
    //ambil semua data didalaman form
    $nama = $_POST["nama"];
    $ibu_kota = $_POST["ibu_kota"];
    $jml_penduduk = $_POST["jml_penduduk"];
    $logo = $_POST["logo"];
    
    $query = "INSERT INTO `provinces`(`nama`, `ibu_kota`, `jml_penduduk`, `logo`) VALUES ('$nama','$ibu_kota','$jml_penduduk','$logo')";
    mysqli_query($conn, $query);
    
    //cek apakah data berhasil ditambah atau tidak
    if (mysqli_affected_rows($conn)>0){
        echo "insert data berhasil";
    } else {
        echo "insert data gagal";
        echo "<br>";
        echo mysql_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data provinsi</title>
</head>
<body>
    <h1>Tambah data provinsi</h1>
    <br>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama Provinsi :</label>
                <input type="text" name="nama" placeholder="nama provinsi" id="nama">
            </li>
            <li>
                <label for="ibu_kota">Ibu kota :</label>
                <input type="text" name="ibu_kota" placeholder="ibu kota" id="ibu_kota">
            </li>
            <li>
                <label for="jml_penduduk">Jumlah Penduduk</label>
                <input type="text" id="jml_penduduk" name="jml_penduduk" placeholder="jumlah penduduk">
            </li>
            <li>
                <label for="logo">Logo</label>
                <input type="text" id="logo" name="logo" placeholder=logo>
            </li>
            <li>
                <button type="submit" name=submit>Tambah</button>
            </li>
        </ul>
    </form>
</body>
</html>