<?php
include("config.php");
$id;
if(isset($_GET['id'])){
    //ambil id dari query string
    $id = $_GET['id'];
}

if(isset($_POST['edit'])){

	// ambil data dari formulir
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$sekolah = $_POST['sekolah_asal'];

	// buat query
    $query = pg_query("UPDATE calonsiswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', sekolah_asal='$sekolah' WHERE id=$id");

	// apakah query simpan berhasil?
	if($query==TRUE){
		// kalau berhasil alihkan dengan status=sukses
		header('Location: daftarsiswa.php?status=sukses');
	} 
    else{
		// kalau gagal alihkan dengan status=gagal
		header('Location: daftarsiswa.php?status=gagal');
	}


} 
else{
	die("Akses dilarang...");
}
?>
