
		 <?php if($a['level']=="user"){ ?>

<div class="col-md-6">

	<?php $data = mysqli_fetch_array(mysqli_query($koneksi,"select count(*) as jumlah from tb_transaksi where user_id = '$_SESSION[id]' and persetujuan = 'ya' "));  if($data['jumlah']>0){?>
		<div class="alert alert-success">
  <strong>SUKSES!!</strong> <?php echo $data['jumlah']; ?> peminjaman telah di setujui silahkan klik <a href="./index/pinjam_details/">Details</a>.
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
     <span aria-hidden="true">&times;</span> 
</button>
</div>
<?php } ?>
<?php $data1 = mysqli_fetch_array(mysqli_query($koneksi,"select count(*) as jumlah from tb_transaksi where user_id = '$_SESSION[id]' and persetujuan = 'tidak' "));  if($data1['jumlah']> 0){?>
		<div class="alert alert-warning">
  <strong>MAAF!!</strong>  <?php echo $data1['jumlah']; ?> peminjaman telah di batalkan silahkan klik <a href="./index/pinjam_details/">Details</a>.
</div>
<?php } ?>

		 </div>

<?php } ?>

<div class="col-md-8">
		  			
		  			<div class="content-box-large">

		<?php 
			if(!isset($_GET["edit"])){
			$data = mysqli_fetch_array(mysqli_query($koneksi,"select * from tb_user where user_id = '$_SESSION[id]'"));
		 ?>
		 	<h2>Selamat Datang Di Aplikasi Inventaris Barang</h2>
		 	<span>Inventaris barang merupakan aplikasi modern yang mudah untuk di pakai, alasan utama pembuatan aplikasi ini karena sistem penyimpanan barang masih manual.</span>

					 <h4>PROFIL DETAIL</h4>
			  			<table class="table" border="0">
				              <tbody>
				                <tr>
				                  <td>Nama</td>
				                  <td>:</td>
				                  <td><?php echo $data["nama"]; ?></td>
				                  
				                </tr>
				                <tr>
				                  <td>Username</td>
				                  <td>:</td>
				                  <td><?php echo $data["username"]; ?></td>
				                 
				                </tr>
				                <tr>
				                  <td colspan="3">
				                  	<button class="btn btn-primary" onclick="location.href = './index/awal-edit<?php echo $data[user_id]; ?>1user';"><i class="glyphicon glyphicon-pencil"></i> Edit</button>
				                  </td>
				 
				                </tr>
				              </tbody>
				            </table>
				            <?php }else{ 
$data = mysqli_fetch_array(mysqli_query($koneksi,"select * from tb_user where user_id = '$_GET[edit]' "));
				            	?>

				            	 <h3>EDIT PROFIL</h3>
				            	 <?php if($_GET["pesan"]){ ?>
	                                <span style="color: red;"><?php echo $_GET["pesan"]; ?></span>
	                                <?php } ?>
				            <form action=".?p=awal&edit=<?php echo $data['user_id']; ?>" method="post">
			                <input style="margin: 10px;" size="10" class="form-control" type="text" value="<?php echo $data['username']; ?>" name="username" placeholder="Username">
			                <input style="margin: 10px;" class="form-control" type="password" value="<?php echo $data['password']; ?>" name="password" placeholder="Password">
			                <input style="margin: 10px;" class="form-control" type="text" value="<?php echo $data['nama']; ?>" name="nama" placeholder="Nama Lengkap">
			                <div class="action">
			                	 <button type="submit" name="edit" class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i> Update</button>
			                </div>                
			            </form>

				            <?php } ?>



						<br /><br />
					</div>


		  		<?php 
		  		if(isset($_POST["edit"])){
		  			$username = $_POST["username"];
					$password = $_POST["password"];
					$nama = $_POST["nama"];
					$email = $_POST["email"];
			if(empty($username) || empty($password) || empty($nama) || empty($email)){
				$pesan = "Maaf Pastikan tidak ada data yang kosong";
				echo "<script>window.location=('./index/awal-edit$data[user_id]1user?pesan=$pesan')</script>";
		    	}else{
		    		$ambil = mysqli_fetch_array(mysqli_query($koneksi,"select * from tb_user where user_id ='$_GET[edit]'"));
		    		$level = $ambil["level"];
		    		if($level=="admin"){
		    	mysqli_query($koneksi,"update tb_user set nama='$nama',password='$password',username='$username',email='$email',level='admin' where
		    		user_id='$_GET[edit]'");
		    }else{
		    	mysqli_query($koneksi,"update tb_user set nama='$nama',password='$password',username='$username',email='$email',level='user' where
		    		user_id='$_GET[edit]'");
		    }
		    	echo "<script>window.alert('Data Berhasil Di Update Berhasil')</script>";
						echo "<script>window.location=('index.php')</script>";
		    	}
		    }

		    		?>
		    	
			
</div>