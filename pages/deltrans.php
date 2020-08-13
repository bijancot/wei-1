<?php 
include 'config.php';
$output = '';
$transid = $_POST['id'];
  mysqli_query($koneksi,"update tb_transaksi set persetujuan = 'tidak' where transaksi_id='$transid'") or die(mysqli_error());
  echo "Peminjaman Di Batalkan";