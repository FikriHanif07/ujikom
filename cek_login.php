<?php 
session_start();  
include 'koneksi.php'; 
$username = $_GET['username'];
$password = $_GET['password'];
$login = mysqli_query($koneksi,"select * from login where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
		header("location:index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>

