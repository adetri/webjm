<html>
<head>
<title>Bootstrap Example</title>
<?php include 'nav.php';
 ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
	<?php 
	include '../../conn/dbarticle.php'; 
	$db=new database();
	$article=$db->show();
	?>
	

	<h2 style="text-align: center;"> Data Article</h2>
<div class="container-fluid">
	<div class="row">
		  <div class="col-md-9">
		  	<a href="adda.php" <button class="btn"  ><i class="fa fa-bars"></i>Tambah</button> </a>
		  </div>
  			<div class="col-md-3">
		

	</div>
	<div class="container-fluid">
	<table id="table-id"class="table table table-bordered text-center">
	  <thead>
		<tr class="text-center">
		  <th width="1%" scope="col" class="text-center text-uppercase ">#</th>
		  <th width="15%"scope="col" class="text-center text-uppercase ">Judul</th>
		  <th width="20%"class="text-center text-uppercase" scope="col">Deskripsi</th>
		  <th width="10%"class=" text-center text-uppercase " scope="col">Tanggal</th>
		  <th width="1%"class=" text-center text-uppercase " scope="col">category</th>
		  <th  width="1%"class="text-center text-uppercase " scope="col">Admin</th>
		  <th  class="text-center text-uppercase " scope="col">Member</th>
		  <th  class="text-center text-uppercase " scope="col">foto</th>
		  <th width="13%" class="text-center text-uppercase " scope="col">action</th>
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
					<td><?php echo $d['judul_article']; ?></td>
					<td>asd</td>
					<td><?php echo $d['tanggal']; ?></td>
					<td><?php echo $d['category']; ?></td>
					<td><?php echo $d['username']; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><img src="../../img/article/<?php echo $d['foto_article'] ?>" width="35" height="40"></td>
					<td>
					<a href="upa.php?id=<?php echo $d['id_article']; ?>&aksi=edit"<button class="btn"><i class="fa fa-folder"></i>Ubah</button></a>
					<a href="../../system/prosesA.php?id=<?php echo $d['id_article']; ?>&aksi=hapus"<button class="btn"><i class="fa fa-close"></i>Hapus</button></a>
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