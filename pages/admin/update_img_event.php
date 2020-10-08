<?php
include '../../conn/db_event.php';
include 'nav.php';
$db = new fevent();
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

	
		<h2 style="text-align: center;">Update Foto Event</h2>
		<div class="container-fluid col-md-6 col-md-offset-3">
		<form action="../../system/prosesEvent.php?aksi=updatefoto" method="post" enctype="multipart/form-data">
			<?php foreach ($db->edit($_GET['id']) as $d){
			 ?>
			<div class="form-group">
				<input type="hidden" class="form-control"  name="id" value="<?php echo $d['id_event']; ?>">
				<input type="hidden" class="form-control"  name="foto_lama" value="<?php echo $d['foto_event']; ?>">
				
				<img src="../../img/event/<?php echo $d['foto_event'] ?>" width="150" height="150">
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
