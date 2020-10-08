<?php include 'nav.php'; ?>

	
		<h2 style="text-align: center;">Tambah Data Clinic</h2>
		<div class="container-fluid col-md-6 col-md-offset-3">
		<form action="../../system/tambah_clinic.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama CLinic :</label>
				<input type="text" class="form-control" placeholder="nama" name="nama" required="required">
			</div>
			<div class="form-group">
   				 <label for="exampleFormControlTextarea1">Alamat Clinic :</label>
    			<textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
 			 </div>
			<div class="form-group">
				<label>No Telepon Clinic:</label>
				<input type="text" class="form-control" placeholder="Masukan No TLP" name="tlp" required="required">
			</div>		
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
		</div>
	

