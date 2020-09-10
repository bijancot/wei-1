<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <title>Laporan Print Denbekang V-44-02</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<?php
	include 'config.php';
	if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$sql = "select * from tb_pinjam where id = ".$id;
		$result = mysqli_query($koneksi, $sql);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$sql = "delete from tb_pinjam where id=".$id;
		}
	}

 ?>

<html>
<head>
	<title>Denbekang V-44-02</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand text-white" href="index.php">
      Denbekang V-44-02 Kota Mojokerto
    </a>
  </nav>

  <div class="container">
    <h3 align="center" class="mt-3">Laporan Denbekang V-44-02 Kota Mojokerto</h3>


        <div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Tabel History Barang Gudang</h3>
			</div>
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<thead>

						<tr>
						<th>Id</th>
						<th>Nama Barang</th>
						<th>Jumlah Barang Yang Dipinjam</th>
						<th>Harga</th>
						<th>Tanggal pengambilan</th>
						<th>Tanggal Pengembalian</th></tr>

					</thead>
					<tbody>
					<?php
            $mulai = $_GET['param1'];
            $akhir = $_GET['param2'];

						$sql = "select * from tb_pinjam a inner join tb_barang s on a.barang_id=s.barang_id where tanggal_pengambilan || tanggal_pengambilan between '$mulai' and '$akhir'  ORDER BY tanggal_pengambilan ASC  ";
						$result = mysqli_query($koneksi, $sql);
								if(mysqli_num_rows($result)){
									while($row = mysqli_fetch_assoc($result)){
					?>
					<tr>
						<td><?php echo $row['barang_id'] ?></td>
						<td><?php echo $row['nama_barang'] ?></td>
						<td><?php echo $row['jumlah_barang'] ?></td>
						<td><?php echo $row['harga'] ?></td>
						<td><?php echo $row['tanggal_pengambilan'] ?></td>
						<td><?php echo $row['tanggal_pengembalian'] ?></td>

					</tr>

					<?php
						}
						}
					?>
					</tbody>
				</table>


			</div>

        </form>

  </div>

</body>
</html>
<script>
		window.print();
</script>
