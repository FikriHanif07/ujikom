<?php 
include 'koneksi.php';
$id_karyawan = $_POST['id_karyawan'];
$nama_karyawan = $_POST['nama_karyawan'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];

mysqli_query($koneksi,"UPDATE data SET nama_karyawan='$nama_karyawan', alamat='$alamat', jenis_kelamin='$jenis_kelamin', email='$email' WHERE id_karyawan='$id_karyawan' ");

header("location:index.php?pesan=update");
?>
