<?php
			include '../../conn/db_home.php';
			include 'nav.php';
$db = new home();
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

	
		<h2 style="text-align: center;">Update Logo</h2>
		<div class="container-fluid col-md-6 col-md-offset-3">
		<form action="../../system/prosesHome.php?aksi=updateabout" method="post" enctype="multipart/form-data">
			<?php foreach ($db->edit($_GET['id']) as $d){
			 ?>
			<div class="form-group">
				<input type="hidden" class="form-control"  name="id" value="<?php echo $d['id']; ?>">
				<input type="hidden" class="form-control"  name="foto_lama" value="<?php echo $d['main']; ?>">
				
				<img src="../../img/home/<?php echo $d['main'] ?>" width="150" height="150">
			</div>	
				<div class="form-group">
				<label>Foto Baru :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>	
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
		</div>
	
<?php } ?>
