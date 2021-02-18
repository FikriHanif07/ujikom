<?php 
include 'koneksi.php';
$id_karyawan = $_GET['id_karyawan'];
mysqli_query($koneksi,"DELETE FROM data WHERE id_karyawan='$id_karyawan'")or die(mysql_error());

header("location:index.php?pesan=hapus");
?>

