<?php 
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row; 
    }
    return $rows;
}

function tambah($data){
    $nama = htmlspecialchars($data["nama"]);
    $ibu_kota = htmlspecialchars($data["ibu_kota"]);
    $jml_penduduk = htmlspecialchars($data["jml_penduduk"]);
    $logo = htmlspecialchars($data["logo"]);

    $query = "INSERT INTO `provinces`(`nama`, `ibu_kota`, `jml_penduduk`, `logo`) VALUES ('$nama','$ibu_kota','$jml_penduduk','$logo')";
    global $conn;
    mysqli_query($conn, $query);
    
}

function hapus($id){
    global $conn;
    $query = "DELETE FROM provinces WHERE id=$id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $ibu_kota = htmlspecialchars($data["ibu_kota"]);
    $jml_penduduk = htmlspecialchars($data["jml_penduduk"]);
    $logo = htmlspecialchars($data["logo"]);

    $query = "UPDATE provinces SET 
            nama ='$nama', 
            ibu_kota ='$ibu_kota', 
            jml_penduduk ='$jml_penduduk', 
            logo ='$logo' 
            WHERE id=$id";

    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>