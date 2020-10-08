<html>
<head>
<title>Bootstrap Example</title>
<?php 
include 'nav.php';

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
<body>
	<?php 
	include '../../conn/dbcategory.php'; 
	$db=new database();
	$show=$db->show();
	?>
	<h2 style="text-align: center;">Data Category</h2>
<div class="container-fluid">
	<div class="row">
		  <div class="col-md-9">
		  	<a href="tambah_category.php" <button class="btn"  ><i class="fa fa-bars"></i>Tambah</button> </a>
		  </div>
  		

	</div>
	<table class="table table table-bordered text-center" id="table-id">
	  <thead>
		<tr class="text-center">
		  <th width="1%"scope="col" class="text-center text-uppercase">#</th>
		  <th width="30%"scope="col" class="text-center text-uppercase">Nama Category</th>
			<th width="10%"scope="col" class="text-center text-uppercase">Action</th>


		</tr>
		</thead>
	  <tbody>
	
				<?php
				$nomor=1;
				foreach ($show as $d ) {
					# code...
				
				?>
				<tr>
					<td><?php echo $nomor++; ?></td>
					<td><?php echo $d['category']; ?></td>
					
					<td>
					<a href="update_category.php?id=<?php echo $d['id_category']; ?>&aksi=edit"<button class="btn"><i class="fa fa-folder"></i>Ubah</button></a>
					<a href="../../system/prosesCategory.php?id=<?php echo $d['id_category']; ?>&aksi=hapus"<button class="btn"><i class="fa fa-close"></i>hapus</button></a>

					</a>
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