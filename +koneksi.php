<?php 
// isi nama host, username mysql, dan password mysql anda
$host = mysqli_connect("localhost", "root", "", "crud1");

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>