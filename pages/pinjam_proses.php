<?php 
include 'config.php';
session_start();

if(isset($_POST['id'])){
	$pj = abs( crc32( uniqid() ) );
	$user = $_SESSION["id"];
	$tanggal = $_POST['tanggalambil'];
	$tanggalbalik = $_POST['tanggalbalik'];
	$id = $_POST['id'];
	$jumlah = $_POST['jumlah'];
    $alasan = $_POST['alasan'];
	$q = mysqli_fetch_array(mysqli_query($koneksi,"select * from tb_barang where barang_id = '$id'"));
 	if($q['jumlah']<=$jumlah){
 		$pesan = "Jumlah Peminjaman Terlalu Banyak";
 	} else{
    mysqli_query($koneksi,"insert into tb_pinjam set pinjam_id = '$pj',barang_id = '$id',jumlah_barang = '$jumlah',tanggal_pengambilan = '$tanggal',tanggal_pengembalian = '$tanggalbalik'") or die(mysqli_error());
    mysqli_query($koneksi,"insert into tb_transaksi set pinjam_id = '$pj',user_id = '$user',alasan = '$alasan',persetujuan = 'belum'") or die(mysqli_error());
    $pesan = "Data Berhasil Di simpan";
  }
  echo $pesan;
  }

 ?>