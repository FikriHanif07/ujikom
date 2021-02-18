<?php 
include 'koneksi.php';
$nama_karyawan = $_POST['nama_karyawan'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];
mysqli_query($koneksi, "INSERT INTO data VALUES ('','$nama_karyawan','$alamat','$jenis_kelamin','$email')");
header("location:index.php?pesan=input");
?>
