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
    
    //fungsi upload gambar
    $logo = upload();
    if (!$logo){
        //untuk menghentikan insert
        return false;
    }

    $query = "INSERT INTO `provinces`(`nama`, `ibu_kota`, `jml_penduduk`, `logo`) VALUES ('$nama','$ibu_kota','$jml_penduduk','$logo')";
    global $conn;
    return mysqli_query($conn, $query);
    
}

//function upload
function upload(){
    $nama = $_FILES['logo']['name'];
    $ukuran = $_FILES['logo']['size'];
    $error = $_FILES['logo']['error'];
    $tmpName = $_FILES['logo']['tmp_name'];

    //cek apakah tidak ada gmabr yang diupload
    if ($error === 4){
        echo "<script>
                alert('pilih gambar yang dipilih')
            </script>";
        return false;
    }

    //cek tipe gambar yang boleh diupload
    $extensifix = ["jpg", "png", "jpeg"];
    $extensigambar = explode('.', $nama);
    $extensigambar = strtolower(end($extensigambar));

    //cek apakah file yag diupload adalah gambar
    //in_array untuk melihat dalam array
    if (!in_array($extensigambar, $extensifix)){
        echo "<script>
            alert('pilih file gambar')
         </script>"; 
         return false;
    }

    //cek apakah file yang diupload tidak melampaui batas
    if ($ukuran>1000000){
        echo "<script>
            alert('file yang diupload terlalu besar')
         </script>"; 
         return false;
    } 

    //lolos pengecekan maka gambar siap diupload
    //mengenerate nama file baru biar jika ada yang sama tidak bertabrakan
    $namaBaru = uniqid();
    $namaBaru .='.';
    $namaBaru .= $extensigambar;

    move_uploaded_file($tmpName, 'logo/' . $namaBaru);
    return $namaBaru;

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

function cari($keyword){
    $query = " SELECT * FROM provinces WHERE 
    nama LIKE '%$keyword%' 
    OR ibu_kota LIKE '%$keyword%' 
    OR jml_penduduk LIKE '%$keyword%'";
    return query($query);
}
?>