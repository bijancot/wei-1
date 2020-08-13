


<!-- <?php
		session_start();
		include 'config.php';
		error_reporting(0);
		if(!isset($_SESSION["id"])){
				echo "<script>window.alert('Silahkan Login Terlebih Dahulu')</script>";
							echo "<script>window.location=('http://127.0.0.1/inventaris/login')</script>";
		}
			$a = mysqli_fetch_array(mysqli_query($koneksi,"select * from tb_user where id_user = '$_SESSION[id]'"));
			$b = $_SESSION["id"]
?> -->
<div class="col-md-8">
<div class="content-box-large">
<a class="btn btn-success" href="./pages/cetak1.php">Cetak laporan</a>
<!-- <a href="./pages/deleteSQL.php?id=<?php echo $_SESSION['id'];?>" onclick="return confirm('Apakah anda ingin menghapus data ini ?')" class="btn btn-danger">HAPUS DATA</a> -->
 <div id="message" style="color: red;"></div>
					<br /><br />


<script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#tbBarangqq tbody tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  
 </script>    

    <?php 

        $page = (isset($_GET['page'])) ? $_GET['page'] : 1;
                $limit = 20;
                $limit_start = ($page - 1) * $limit;

      $q=mysqli_query($koneksi,"select * from tb_pinjam a inner join tb_barang s  on a.barang_id=s.barang_id join tb_transaksi t on t.pinjam_id=a.pinjam_id join tb_user u on u.user_id=t.user_id
	  ORDER BY tanggal_pengambilan ASC limit ".$limit_start.",".$limit);
     ?>
           <h3>Tabel History Barang Gudang </h3>
           <div id="pesan"></div>
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="tbBarangqq">
                <thead>
                                  <tr>
                                  <td colspan="8">
                                    <input type="text" name="search" placeholder="Pencarian.." id="search" class="form-control" />  
                                  </td>
                 
                                </tr>
                   <tr>
                          <td><b>Nomor</b></td>
                          <td><b>Nama User</b></td>
                          <td><b>Nama Barang</b></td>
                          <td><b>Jumlah Pinjam</b></td>
                          <td><b>Tanggal Ambil</b></td>
                          <td><b>Tanggal Kembali</b></td>
                          <td><b>Alasan</b></td>
                          <!-- <td><b>Aksi</b></td> -->
                        </tr>
                </thead>
                
                      <tbody id="isipermintaan">
                  <?php 
                //   $nomor = $limit_start + 1;
                  while($data=mysqli_fetch_array($q)) {
                    $id = $data["transaksi_id"]; 
                  ?>
                        <tr class="add_persetujuan<?php echo $id ?>">

                          <td><?php echo $data['barang_id'] ?></td>
						<td><?php echo $data['nama'] ?></td>
						<td><?php echo $data['nama_barang'] ?></td>
						<td><?php echo $data['jumlah_barang'] ?></td>
						<td><?php echo $data['harga'] ?></td>
						<td><?php echo $data['tanggal_pengambilan'] ?></td>
						<td><?php echo $data['tanggal_pengembalian'] ?></td>
                          <!-- <td>
                            <form id="aksitrans" method="GET" >
                             <a id="<?php  echo $data['transaksi_id']; ?>" class="ab btn btn-success btn-block"><i class="glyphicon glyphicon-ok"></i> Setuju</a>
                            <a id="<?php  echo $data['transaksi_id']; ?>" class="ac btn btn-danger text-success btn-block"><i class="glyphicon glyphicon-remove"></i> Batalkan</a>
                            </form>
                           
                            </td> -->
                        </tr>
                      <?php 
                    //   $nomor++;
                  } ?>
                      
                      </tbody>
                    
                    </table>