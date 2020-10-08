<?php
include '../../conn/dbcategory.php';
include 'nav.php';
$db = new database();
$id=$_GET['id'];
if(! is_null($id))
{
	$data = $db->edit($id);
}
else
{
	header('location:article.php');
}
?>

	
		<h2 style="text-align: center;">Tambah Data Category</h2>
		<div class="container-fluid col-md-6 col-md-offset-3">
		<form action="../../system/prosesCategory.php?aksi=tambah_category" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama Category :</label>
				<input type="text" class="form-control" placeholder="nama" name="category" required="required">
			</div>
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
		</div>
	

