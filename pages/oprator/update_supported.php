

<?php
			include '../../conn/db_supported.php';
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
<script src="wysihtml/dist/wysihtml-toolbar.min.js"></script>
<!-- rules defining tags, attributes and classes that are allowed -->
<script src="wysihtml/parser_rules/advanced_and_extended.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="../../js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="../../css/datepicker.css">
	<div class="container-fluid col-md-6 col-md-offset-3">
		<h2 style="text-align: center;">Update nama Brand</h2>
		<form action="../../system/prosesSupported.php?aksi=update" method="post" enctype="multipart/form-data">
		
			<?php foreach ($db->edit($_GET['id']) as $x){
			 ?>
			<div class="form-group">
				<input type="hidden" class="form-control"   value="<?php echo $x['id_brand']; ?>"  name="id" >

				<label>nama :</label>
				
				<input type="text" class="form-control" placeholder="Masukkan Nama"  value="<?php echo $x['nama_brand']; ?>"  name="judul" required="required">
			</div>
			
					
		<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
			
</div>
		
        <?php 
			}
			?>

<script src="../../vendor/ckeditor/ckeditor.js"></script>
