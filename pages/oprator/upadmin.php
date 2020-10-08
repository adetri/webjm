<?php
			include 'nav.php';
			include '../../conn/db_user.php';
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

<div class="container-fluid col-md-6 col-md-offset-3">
<h2 style="text-align: center;">Update Data User</h2>
	<?php foreach ($db->edit($_GET['id']) as $d){
			 ?>
		<form action="../../system/prosesAdmin.php?aksi=update" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Username :</label>
				<input type="hidden" name="id" value="<?php echo $d['id_user']; ?>">
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama"  value="<?php echo $d['username']; ?>"required="required">
			</div>
			<div >
			  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Preference</label>
			  <select class="custom-select my-2 mr-sm-2" name="role" id="inlineFormCustomSelectPref">
				<option selected value="<?php echo $d['role']; ?>"><?php echo $d['role']; ?></option>
				<option value="admin">Admin</option>
				<option value="oprator">Oprator</option>
			  </select>
				</div>
			<div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto"  value="<?php echo $d['foto_user'];?>">
				<input type="hidden" name="foto_lama" value="<?php echo $d['foto_user'];?>">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>			
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
		<?php } ?>
	
	</div>