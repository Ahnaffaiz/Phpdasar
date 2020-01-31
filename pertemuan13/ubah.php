<?php
require 'functions.php';

//mengambil data sesuai id
$id = $_GET["id"];
$province = query("SELECT * FROM provinces WHERE id=$id")[0];
//apakah tombol submit sudah dipencet ?
if(isset($_POST["submit"])){

    //apakah data berhasil diubah ?
    if (ubah($_POST)>0) {
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href='index.php';
        </script>
        ";
    }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Provinsi</title>
</head>
<body>
    <h1>Edit data provinsi</h1>
    <br>
    <form action="" method="post" enctype="multipart/form-data">
        <!--hidden untuk menyembunyikan histori input-->
        <input type="hidden" name="id" value="<?php echo $province["id"]; ?>",>
        <input type="hidden" name="logoLama" value="<?php echo $province["logo"]; ?>",>
        <ul>
            <li>
                <label for="nama">Nama Provinsi :</label>
                <input type="text" name="nama" id="nama" value="<?php echo $province["nama"]; ?>" required>
            </li>
            <li>
                <label for="ibu_kota">Ibu kota :</label>
                <input type="text" name="ibu_kota" id="ibu_kota" value="<?php echo $province["ibu_kota"]; ?>" required>
            </li>
            <li>
                <label for="jml_penduduk">Jumlah Penduduk</label>
                <input type="text" id="jml_penduduk" name="jml_penduduk" value="<?php echo $province["jml_penduduk"]; ?>" required>
            </li>
            <li>
                <label for="logo">Logo</label> <br>
                <img src="logo/<?php echo $province['logo'] ?>" alt="" width="40"> <br>
                <input type="file" id="logo" name="logo" ?>"
            </li>
            <li>
                <button type="submit" name=submit>Tambah</button>
            </li>
        </ul>
    </form>
</body>
</html>