<html>
<head>
<title>Bootstrap Example</title>
<?php include 'nav.php';
include '../../conn/koneksi.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
<body>
	<h2 style="text-align: center;">Data Pengurus</h2>
	<?php 
	include '../../conn/db_pengurus.php'; 
	$db=new database();
	$show=$db->show();
	?>
<div class="container-fluid">
	<div class="row">
		  <div class="col-md-9">
		  	<a href="tambah_pengurus.php" <button class="btn"  ><i class="fa fa-bars"></i> Tambah</button> </a>
		  	<a href="printoutmember.php" target="_blank"> <i class="fa fa-folder"></i> Print</button> </a>
		  </div>
  			<div class="col-md-3">

</div>

	</div>
	<table class="table table table-bordered text-center" id="table-id">
	  <thead>
		<tr class="text-center">
		  <th width="1%" scope="col" class="text-center text-uppercase">#</th>
		  <th width="20%"scope="col" class="text-center text-uppercase ">Nama</th>
		  <th class="text-center text-uppercase" >Alamat</th>
		  <th width="1%" class="text-center text-uppercase" scope="col">Domisili</th>
		  <th width="1%" class="text-center text-uppercase" scope="col">Kontak</th>
		  <th  width="1%" class="text-center text-uppercase" scope="col">Jabatan</th>
		  <th width="1%" class=" text-center text-uppercase " scope="col">Foto</th>
		  <th  width="12%" class="text-center text-uppercase " scope="col">Action</th>
		</tr>
		</thead>
	  <tbody>
	
				<?php  
					$nomor=1;
				foreach ($show as $d) {
					# code...
				
				?>
				<tr>
					<td><?php echo $nomor++; ?></td>
					<td><?php echo $d['nama_pengurus']; ?></td>
					<td><?php echo $d['alamat']; ?></td>
					<td><?php echo $d['domisili']; ?></td>
					<td>0<?php echo $d['tlp']; ?></td>
					<td><?php echo $d['nama_jabatan']; ?></td>
					<td><img src="../../img/pengurus/<?php echo $d['foto'] ?>" width="35" height="40"></td>
					<td>
					<a href="../../system/prosesPengurus.php?id=<?php echo $d['id_pengurus']; ?>&aksi=hapus"<button class="btn"><i class="fa fa-close"></i>Hapus</button></a>

					<a href="#" <button class="btn" data-toggle="modal" data-target="#myModal<?php echo $d['id_pengurus']; ?>"><i class="fa fa-bars"></i>Detail</button> </a>
						<?php include 'newpengurus.php'; ?>
						</td>
				</tr>
				<?php 
			}
			?>
	  </tbody>
      <script>
    $(document).ready( function () {
    $('#table-id').DataTable();
} );
</script>
	</table>


	</div>
</body>
</html>