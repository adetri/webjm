<?php
			include 'nav.php';
			include '../../conn/koneksi.php';
			$id = $_GET['id'];
			$data = mysqli_query($koneksi,"select * from clinic where id_clinic='$id'");
			while($d = mysqli_fetch_array($data)){
				?>

	
		<h2 style="text-align: center;">Tambah Data Clinic</h2>
		<div class="container-fluid col-md-6 col-md-offset-3">
		<form action="../../system/update_clinic.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<input type="hidden" class="form-control"  name="id" value="<?php echo $d['id_clinic']; ?>">
				<label>Nama CLinic :</label>
				<input type="text" class="form-control" placeholder="nama" value="<?php echo $d['nama_clinic']; ?>" name="nama" required="required">
			</div>
			<div class="form-group">
   				 <label for="exampleFormControlTextarea1">Alamat Clinic :</label>
    			<textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $d['alamat_clinic']; ?></textarea>
 			 </div>
			<div class="form-group">
				<label>No Telepon Clinic:</label>
				<input type="text" class="form-control" placeholder="Masukan No TLP" name="tlp" value="<?php echo $d['no_tlp_clinic']; ?>" required="required">
			</div>		
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
		</div>
	
<?php } ?>
