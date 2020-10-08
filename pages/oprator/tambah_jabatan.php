<?php
include '../../conn/db_jabatan.php';
include 'nav.php';
$db = new database();

?>

	
		<h2 style="text-align: center;">Tambah Data Jabatan</h2>
		<div class="container-fluid col-md-6 col-md-offset-3">
		<form action="../../system/prosesJabatan.php?aksi=tambah" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama Jabatan :</label>
				<input type="text" class="form-control" placeholder="Nama Jabatan" name="jabatan" required="required"><div class="form-group">
				<label>No Jabatan :</label>
				<input type="text" class="form-control" placeholder="Nomor Jabatan" name="nojabatan" required="required">
			</div>
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
		</div>
	

