<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
	</div>
	<br/>
	<a href="index.php">Lihat Semua Data</a>
	<br/>
	<h3>Edit data</h3>

<?php 

	include "koneksi.php";

	$id_karyawan = $_GET['id_karyawan'];
	$query_mysql = mysqli_query($koneksi,"SELECT * FROM data WHERE id_karyawan='$id_karyawan' ")or die(mysql_error());
	
	while($data = mysqli_fetch_array($query_mysql)) {
?>
<form action="update.php" method="post">		
	<table>
	<tr>	
		<td>Nama</td>
		<td>
		<input type="hidden" name="id_karyawan" value="<?php echo $data['id_karyawan'] ?>">
		<input type="text" name="nama_karyawan" value="<?php echo $data['nama_karyawan'] ?>">
		</td>					
	</tr>	
	
	<tr>	
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>			
	</tr>	
	
	<tr>	
		<td>Jenis Kelamin</td>
		<td><input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>"></td>	
	</tr>	
	<tr>	
		<td>Email</td>
		<td><input type="text" name="email" value="<?php echo $data['email'] ?>"></td>	
	</tr>	
			
	<tr>	
		<td></td>
		<td><input type="submit" value="Simpan"></td>				
	</tr>				
	</table>
</form>
<?php } ?>
</body>
</html>