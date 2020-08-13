<?php
$server = "localhost";
$username = "admin_inventaris";
$password = "1sampaiinventaris";
$database = "admin_invenstaris";


$koneksi = mysqli_connect($server, $username, $password, $database);
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
if (!$koneksi) {
	die("Connection failed: " . mysqli_connect_error());
}
?>
