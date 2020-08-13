<?php
include 'config.php';
session_start();
error_reporting(0);
$path = "images/barang/";
$valid_formats = array("jpg","png","gif","bmp","jpeg","JPG","PNG","GIF","BMP","JPEG");
if(isset($_FILES))
{
	$name = $_FILES['photo']['name'];
	$size = $_FILES['photo']['size'];
	if(strlen($name)) {
		list($txt, $ext) = explode(".", $name);
		if(in_array($ext,$valid_formats)) {
			if($size<(1024*1024)) {
				$image_name = $name;
				$tmp = $_FILES['photo']['tmp_name'];
				if(move_uploaded_file($tmp, $path.$image_name)){
					echo "<img src='images/barang/".$image_name."' class='preview'>";
					$_SESSION['foto'] = $image_name;
				}
				else
				echo "Image Upload failed";
			}
			else
			echo "Image file size max 1 MB";
		}
		else
		echo "Invalid file format..";
	}
	else
	echo "Please select image..!";

}
if(isset($_POST['name'])){
  $nama = $_POST['name'];
    $kategori = $_POST['kategori_id'];
    $jumlah = $_POST['jumlah'];
	$satuan = $_POST['satuan'];
	$harga = $_POST['harga'];
	$cara = $_POST['cara'];
	$kondisi = $_POST['kondisi'];
    $deskripsi = $_POST['deskripsi'];
 $q2 = mysqli_query($koneksi,"select * from tb_barang where nama_barang ='$nama'");
 if(mysqli_num_rows($q2)>0){
 	$data = mysqli_fetch_array($q2);
		$id = $data['barang_id'];
		$jml = $jumlah + $data['jumlah'];
		mysqli_query($koneksi,"update tb_barang set jumlah ='$jml' where barang_id = '$id'")or die(mysqli_error());
		$pesan = "Data Sudah Ada Jumlah berhasil di tambahkan";
	}else{
		mysqli_query($koneksi,"insert into tb_barang set nama_barang = '$nama',kategori_id='$kategori',jumlah='$jumlah',satuan='$satuan',harga='$harga',cara_perolehan='$cara',kondisi='$kondisi',deskripsi='$deskripsi',gambar='$_SESSION[foto]'") or die(mysqli_error());
		$pesan = "Data Sudah Disimpan";
	}
		
	}
	echo $pesan;
	

  

  




?>