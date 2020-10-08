<?php include 'nav.php';
include '../../conn/koneksi.php'; ?>

<script src="wysihtml/dist/wysihtml-toolbar.min.js"></script>

<!-- rules defining tags, attributes and classes that are allowed -->
<script src="wysihtml/parser_rules/advanced_and_extended.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="../../js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="../../css/datepicker.css">
	<div class="container-fluid col-md-6 col-md-offset-3">
		


		<h2 style="text-align: center;">Tambah Supported</h2>
		<form action="../../system/prosesSupported.php?aksi=tambah" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Judul :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required="required">
			</div>
			

			
			    <div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>	
			
			
					
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
</div>
<script src="../../vendor/ckeditor/ckeditor.js"></script>
