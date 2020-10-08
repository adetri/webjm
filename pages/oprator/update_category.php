<?php
			include 'nav.php';
			include '../../conn/koneksi.php';
			$id = $_GET['id'];
			$data = mysqli_query($koneksi,"select * from category where id_category='$id'");
			while($d = mysqli_fetch_array($data)){
				?>

	
		<h2 style="text-align: center;">UBAH DATA CATEGOTY</h2>
		<div class="container-fluid col-md-6 col-md-offset-3">
		<form action="../../system/update_category.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<input type="hidden" class="form-control"  name="id" value="<?php echo $d['id_category']; ?>">
				<label>Nama category :</label>
				<input type="text" class="form-control" placeholder="nama" value="<?php echo $d['category']; ?>" name="nama" required="required">
			</div>		
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
		</div>
	
<?php } ?>
