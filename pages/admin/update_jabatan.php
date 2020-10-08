<?php
      include '../../conn/db_jabatan.php';
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

 <link href="../../vendor/datetimepicker/bs3/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../../vendor/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">



	<div class="container-fluid col-md-6 col-md-offset-3">
		


		<h2 style="text-align: center;">Update Jabatan</h2>
		<form action="../../system/prosesJabatan.php?aksi=update" method="post" enctype="multipart/form-data">
      <?php foreach ($db->edit($_GET['id']) as $x) {
        # code...
       ?>

      <input type="hidden" name="id" value="<?php echo $x['id_jabatan']; ?>">
		
        	<div class="form-group">
				<label>Jabatan :</label>
				<input type="text" class="form-control" placeholder="Jumlah Peserta" name="jabatan" required="required" value="<?php echo $x['nama_jabatan']; ?>">
				</div>
        <div class="form-group">
        <label>No Jabatan :</label>
        <input type="text" class="form-control" placeholder="Jumlah Peserta" name="nojabatan" required="required" value="<?php echo $x['no_jabatan']; ?>">
        </div>
          
					<?php } ?>
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
</div>
<script src="../../vendor/ckeditor/ckeditor.js"></script>
  <script type="text/javascript" src="../../vendor/datetimepicker/bs3/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="../../vendor/datetimepicker/bs3/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../vendor/datetimepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="../../vendor/datetimepicker/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
         format: 'yyyy-mm-dd hh:ii:ss',
        autoclose: true
    });
  
</script>
