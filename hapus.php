<?php
include("config.php");
if(isset($_GET['id'])){

    //ambil id dari query string
    $id = $_GET['id'];

    //buat query hapus
    $query = pg_query("DELETE FROM calonsiswa WHERE id = $id");

    //apakah query hapus berhasil?
    if($query){
        header('Location: daftarsiswa.php');
    }
    else{
        die("gagal menghapus...");
    }
}
else{
    die("akses dilarang...");
}
?>