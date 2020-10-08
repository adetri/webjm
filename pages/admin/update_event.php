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

 <link href="../../vendor/datetimepicker/bs3/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../../vendor/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">



	<div class="container-fluid col-md-6 col-md-offset-3">
		


		<h2 style="text-align: center;">Update Event</h2>
		<form action="../../system/prosesEvent.php?aksi=update" method="post" enctype="multipart/form-data">
      <?php foreach ($db->edit($_GET['id']) as $x) {
        # code...
       ?>

      <input type="hidden" name="id" value="<?php echo $x['id_event']; ?>">
			<div class="form-group">
   				 <label for="exampleFormControlTextarea1">Deskripsi :</label>
   				 <textarea class="ckeditor" id="ckeditor" name="nama" value=""><?php echo $x['nama_event']; ?></textarea>
    		
 			 </div>
 			<div class="form-group">
            	<label for="dtp_input1" class=" control-label">Tanggal</label>
                <div class="input-group date form_datetime" data-date=""  data-link-field="dtp_input1">
                    <input class="form-control" name="tanggal" size="16" type="text" value="<?php echo $x['time']; ?>" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
          <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
        <input type="hidden" id="dtp_input1" value="" /><br/>
            </div>
        	<div class="form-group">
				<label>Peserta :</label>
				<input type="text" class="form-control" placeholder="Jumlah Peserta" name="peserta" required="required" value="<?php echo $x['peserta']; ?>">
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
