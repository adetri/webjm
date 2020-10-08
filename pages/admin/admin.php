<html>
<head>
<title>Bootstrap Example</title>
<?php include 'nav.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 	
	
<body>
	<?php 
	include '../../conn/db_user.php'; 
	$db=new database();
	$show=$db->show();
	?>
	<h2 style="text-align: center;"> Data User</h2>
<div class="container-fluid">
	<div class="row">
		  <div class="col-md-9">
		  	<a href="inputadmin.php" <button class="btn"  ><i class="fa fa-bars"></i>Tambah</button> </a>
		  </div>
  			<div class="col-md-3">
		

	</div>
	<div class="container-fluid">
	<table class="table table table-bordered text-center" id="table-id">
	  <thead>
		<tr class="text-center">
		  <th scope="col" class="text-center text-uppercase col-md-1">#</th>
		  <th scope="col" class="text-center text-uppercase col-md-1">Username</th>
		  <th class="col-md-5 text-center text-uppercase" scope="col">Role</th>
		  <th class=" text-center text-uppercase col-md-1" scope="col">Foto</th>
		  <th  class="text-center text-uppercase col-md-2" scope="col">Action</th>
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
					<td><?php echo $d['username']; ?></td>
					<td><?php echo $d['role']; ?></td>
					<td><img src="../../img/<?php echo $d['foto_user'] ?>" width="35" height="40"></td>
					<td>
					<a href="upadmin.php?id=<?php echo $d['id_user']; ?>&aksi=edit"<button class="btn"><i class="fa fa-folder"></i>Ubah</button></a>
					<a href="../../system/prosesAdmin.php?id=<?php echo $d['id_user']; ?>&aksi=hapus"<button class="btn"><i class="fa fa-close"></i>Hapus</button></a>
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
		
	</div>
</body>
</html>