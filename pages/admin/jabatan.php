<html>
<head>
<title>Bootstrap Example</title>
<?php 
include 'nav.php';

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
<body>
	<?php 
	include '../../conn/db_jabatan.php'; 
	$db=new database();
	$show=$db->show();
	?>
	<h2 style="text-align: center;">Data Jabatan</h2>
<div class="container-fluid">
	<div class="row">
		  <div class="col-md-9">
		  	<a href="tambah_jabatan.php" <button class="btn"  ><i class="fa fa-bars"></i>Tambah</button> </a>
		  </div>
  		

	</div>
	<table class="table table table-bordered text-center" id="table-id">
	  <thead>
		<tr class="text-center">
		  <th width="1%" scope="col" class="text-center text-uppercase">#</th>
		  <th width="30%" scope="col" class="text-center text-uppercase">Nama Jabatan</th>
		  <th width="2%" scope="col" class="text-center text-uppercase">No Jabatan</th>
		
			<th width="3%"scope="col" class="text-center text-uppercase">Action</th>


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
					<td><?php echo $d['nama_jabatan']; ?></td>
					<td><?php echo $d['no_jabatan']; ?></td>
					
					<td>
					<a href="update_jabatan.php?id=<?php echo $d['id_jabatan']; ?>&aksi=edit"<button class="btn"><i class="fa fa-folder"></i>Ubah</button></a>
					<a href="../../system/prosesJabatan.php?id=<?php echo $d['id_jabatan']; ?>&aksi=hapus"<button class="btn"><i class="fa fa-close"></i>hapus</button></a>

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