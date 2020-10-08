<html>
<head>
<title>Bootstrap Example</title>
<?php include 'nav.php';
 ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
	<?php 
	include '../../conn/db_event.php'; 
	$db=new fevent();
	$show=$db->showdb();
	?>
	

	<h2 style="text-align: center;">Data Event</h2>
<div class="container-fluid">
	<div class="row">
		  <div class="col-md-9">
		  	<a href="tamba_event.php" <button class="btn"  ><i class="fa fa-bars"></i>Tambah</button> </a>
		  </div>
  			<div class="col-md-3">
		

	</div>
	<div class="container-fluid">
	<table id="table-id"class="table table table-bordered text-center">
	  <thead>
		<tr class="text-center">
		  <th width="1%"  class="text-center text-uppercase ">#</th>
		  <th class=" text-center text-uppercase ">Nama Event</th>
		  <th width="1%" class="text-center text-uppercase " >Peserta</th>
		  <th  width="1%"class=" text-center text-uppercase " >Tanggal</th>
		  <th width="14%x" class="text-center text-uppercase " >action</th>
		</tr>
		</thead>
	  <tbody>
	
				<?php 
					$nomor=1;
					foreach ($show as $d ) {
					?>
				<tr>
					<td><?php echo $nomor++; ?></td>
					<td><?php echo $d['nama_event']; ?></td>
					<td><?php echo $d['peserta']; ?></td>
					<td><?php echo $d['time']; ?></td>
					<td>
					<a href="update_event.php?id=<?php echo $d['id_event']; ?>&aksi=edit"<button class="btn"><i class="fa fa-folder"></i>Ubah</button></a>
					<a href="../../system/prosesEvent.php?id=<?php echo $d['id_event']; ?>&aksi=hapus"<button class="btn"><i class="fa fa-close"></i>Hapus</button></a>
					<a href="update_img_event.php?id=<?php echo $d['id_event']; ?>&aksi=edit"<button class="btn"><i class="fa fa-folder"></i>Ubah Foto</button></a>
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