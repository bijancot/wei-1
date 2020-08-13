<?php
    session_start();
	include 'config.php';
	error_reporting(0);
	if(!isset($_SESSION["id"])){
		echo "<script>window.alert('Silahkan Login Terlebih Dahulu')</script>";
	    echo "<script>window.location=('http://127.0.0.1/inventaris/login')</script>";
	}
    $id2=$_SESSION['id'];
    $id=$_GET['id'];
    $delete=mysqli_query($koneksi, "DELETE FROM tb_pinjam WHERE `id_user`='$id'");
    $delete1=mysqli_query($koneksi, "DELETE FROM tb_transaksi WHERE `user_id`='$id'");
    if($delete && $delete1){
        echo "<script>
        alert('Hapus Data Berhasil');
        document.location.href = 'export.php?id=$id2';
    </script>";
    }else{
        echo "<script>
        alert('Hapus Data Gagal');
        document.location.href = 'export.php?id=$id2';
        </script>";
       
    }


?>