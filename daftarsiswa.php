<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
	<header>
		<h3>Siswa yang sudah mendaftar</h3>
	</header>

	<nav>
		<a href="formdaftar.php">[+] Tambah Baru</a>
	</nav>

	<br>

	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Sekolah Asal</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>

		<?php
		$query = pg_query("SELECT * FROM calonsiswa");
		// $query = mysqli_query($db, $sql);


		while($siswa = pg_fetch_array($query)){
			echo "<tr>";

			echo "<td>".$siswa['id']."</td>";
			echo "<td>".$siswa['nama']."</td>";
			echo "<td>".$siswa['alamat']."</td>";
			echo "<td>".$siswa['jenis_kelamin']."</td>";
			echo "<td>".$siswa['sekolah_asal']."</td>";

			echo "<td>";
			echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
			echo "  ";
			echo "<a href='formedit.php?id=".$siswa['id']."'>Edit</a>";
			echo "</td>";

			echo "</tr>";

			}


		?>

	</tbody>
	</table>

	<p>Total: <?php echo pg_num_rows($query) ?></p>

	</body>

	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Perubahan data siswa berhasil!";
			} 
			else {
				echo "Perubahan data gagal!";
			}
		?>
	</p>
	<?php endif; ?>
</html>
