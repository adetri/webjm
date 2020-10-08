<html>
<head>
<title>Bootstrap Example</title>
<?php include 'nav.php';
 ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
	<?php 
	include '../../conn/db_supported.php'; 
	$db=new database();
	$article=$db->show();
	?>
	

	<h2 style="text-align: center;"> Data Article</h2>
<div class="container-fluid">
	<div class="row">
		  <div class="col-md-9">
		  	<a href="tambah_suported.php" <button class="btn"  ><i class="fa fa-bars"></i>Tambah</button> </a>
		  </div>
  			<div class="col-md-3">
		

	</div>
	<div class="container-fluid">
	<table id="table-id"class="table table table-bordered text-center">
	  <thead>
		<tr class="text-center">
		  <th width="1%"scope="col" class="text-center text-uppercase ">#</th>
		  <th width="40%"scope="col" class="text-center text-uppercase">Nama Brand</th>
		  <th width="5%"class=" text-center text-uppercase" scope="col">Foto Brand</th>
		  <th width="14%"class=" text-center text-uppercase" scope="col">Action</th>
		</tr>
		</thead>
	  <tbody>
	
				<?php 
					$nomor=1;
					foreach ($db->show() as $d ) {
						# code...
					 
				
				

					?>
				<tr>
					<td><?php echo $nomor++; ?></td>
					<td><?php echo $d['nama_brand']; ?></td>
					<td><img src="../../img/supported/<?php echo $d['img_bran'] ?>" width="35" height="40"></td>
					<td>
					<a href="update_supported.php?id=<?php echo $d['id_brand']; ?>&aksi=edit"<button class="btn"><i class="fa fa-folder"></i>Ubah</button></a>
					<a href="update_img_supported.php?id=<?php echo $d['id_brand']; ?>&aksi=edit"<button class="btn"><i class="fa fa-folder"></i>Ubah Foto</button></a>
					<a href="../../system/prosesSupported.php?id=<?php echo $d['id_brand']; ?>&aksi=hapus"<button class="btn"><i class="fa fa-close"></i>Hapus</button></a>
					</td>
				</tr>
		<?php } ?>
	  </tbody>
	      <script>
    $(document).ready( function () {
    $('#table-id').DataTable();
} );
</script>
	</table>
		</div>
	</div>
</body>
</html>