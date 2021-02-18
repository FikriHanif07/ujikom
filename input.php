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
	<h3>Input data baru</h3>
	<form action="input_aksi.php" method="post">		
	<table>		<tr>	<td>Nama</td>
				<td><input type="text" name="nama_karyawan"></td>						</tr>	
			<tr>	<td>Alamat</td>
				<td><input type="text" name="alamat"></td>						</tr>	
			<tr>	<td>Jenis Kelamin</td>
				<td><input type="text" name="jenis_kelamin"></td>					</tr>	
				<tr>	<td>Email</td>
				<td><input type="text" name="email"></td>					</tr>
			<tr>	<td></td>
				<td><input type="submit" value="Simpan"></td>					</tr>				
	</table>
	</form>
</body>
</html>
