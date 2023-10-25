<!DOCTYPE html>
<html>
<head>
	<title>Perbaikan Data Siswa | SMK Coding</title>
</head>

<body>
	<header>
		<h3>Formulir Perbaikan Data Siswa</h3>
	</header>

	<form action="prosesedit.php?id=<?php 
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        echo "$id"; 
                    }
                ?>" method="POST">
		<fieldset>
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"></textarea>
		</p>
		<p>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
		</p>
		<p>
			<label for="sekolah_asal">Sekolah Asal: </label>
			<input type="text" name="sekolah_asal" placeholder="nama sekolah" />
		</p>
		<p>
			<input type="submit" value="Edit" name="edit" />
		</p>
		</fieldset>
	</form>

	</body>
</html>
