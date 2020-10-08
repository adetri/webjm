<?php include 'nav.php'; ?>

	
		<h2 style="text-align: center;">Tambah Data User</h2>
		<div class="container-fluid col-md-6 col-md-offset-3">
		<form action="../../system/prosesAdmin.php?aksi=tambah" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Username :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required="required">
			</div>
			<div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
			</div>
			<div >
			  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Preference</label>
			  <select class="custom-select my-2 mr-sm-2" name="role" id="inlineFormCustomSelectPref">
				<option selected>Chose..</option>
				<option value="admin">Admin</option>
				<option value="oprator">Oprator</option>
			  </select>
				</div>
			<div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>			
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
		</div>
	

