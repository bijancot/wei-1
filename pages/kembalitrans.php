<?php 
include 'config.php';
$output = '';
$transid = $_POST['id'];
  mysqli_query($koneksi,"update tb_transaksi set persetujuan = 'selesai' where transaksi_id='$transid'") or die(mysqli_error());
  $row = mysqli_fetch_array(mysqli_query($koneksi,"select b.jumlah as jumlah,p.jumlah_barang as jumlah_barang,u.nama,p.barang_id as baru,b.nama_barang,p.jumlah_barang,p.tanggal_pengambilan,p.tanggal_pengembalian,t.alasan,t.persetujuan
       from tb_transaksi as t inner join tb_user as u on t.user_id = u.user_id inner join tb_pinjam as p on t.pinjam_id = p.pinjam_id inner join tb_barang as b on p.barang_id = b.barang_id where transaksi_id='$transid'"));
   	$jml = $row['jumlah'] + $row['jumlah_barang'];
  mysqli_query($koneksi,"update tb_barang set jumlah = '$jml' where barang_id = '$row[baru]'");
  echo "Pengembalian Telah Selesai";