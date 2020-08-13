<?php
$server = "localhost";
$username = "admin_inventaris";
$password = "1sampaiinventaris";
$database = "admin_invenstaris";

// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>
