<?php 

include 'config.php';
 
$emailAddress = false;
if(isset($_POST['name'])){
	$id = $_POST['id'];
    $nama = $_POST['name'];
    $kategori = $_POST['kategori_id'];
    $jumlah = $_POST['jumlah'];
    $satuan = $_POST['satuan'];
    $harga = $_POST['harga'];
    $cara = $_POST['cara'];
    $kondisi = $_POST['kondisi'];
    $deskripsi = $_POST['deskripsi'];

  mysqli_query($koneksi,"update tb_barang set nama_barang = '$nama',kategori_id='$kategori',jumlah='$jumlah',satuan='$satuan',harga='$harga',cara_perolehan='$cara',kondisi='$kondisi',deskripsi='$deskripsi' where barang_id='$id'") or die(mysqli_error());
}
 
echo 'Data Berhasil Di Update ';

?>