

<?php
			include '../../conn/dbarticle.php';
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
		<h2 style="text-align: center;">Articler</h2>
		<form action="../../system/prosesA.php?aksi=update" method="post" enctype="multipart/form-data">
		
			<?php foreach ($db->edit($_GET['id']) as $x){
			 ?>
			<div class="form-group">
				<input type="hidden" class="form-control"   value="<?php echo $x['id_article']; ?>"  name="id" >

				<label>Judul :</label>
				
				<input type="text" class="form-control" placeholder="Masukkan Nama"  value="<?php echo $x['judul_article']; ?>"  name="judul" required="required">
			</div>
			
			<div class="form-group">
   				 <label for="exampleFormControlTextarea1">Deskripsi :</label>
    			<textarea class="ckeditor" id="ckeditor" name="deskripsi"><?php echo $x['deskripsi']; ?> </textarea>
 			 </div>
 			 <div class="form-group">
            <label>Tanggal:</label>
            <input type="text"  name="tanggal" value="<?php echo $x['tanggal'];  ?>" class="form-control datepicker"  required/>
            <?php include '../../system/date.php'; ?>
        	</div>
        	
        	<div >
			   <div class="form-group">
			    <label for="exampleFormControlSelect1">Category :</label>
			    <select name="category"  class="form-control" id="exampleFormControlSelect1">
			    	<option value="<?php echo $x['id_category']; ?>"><?php echo $x['category']; ?></option>
				<?php 
			foreach ($db->cat() as $xd) {
				?>
				<option value="<?php echo $d['id_category']; ?>"><?php echo $xd['category']; ?></option>
			<?php } ?>
			  </select>
			  <div class="form-group">
			    <label for="exampleFormControlSelect1">Admin :</label>
			    <select name="admin" class="form-control" id="exampleFormControlSelect1">
			    <option value="<?php echo $x['id_user']; ?>"> <?php echo $x['username']; ?></option>
				<?php foreach ($db->us() as $xd) {
					
				 ?>
				<option value="<?php echo $xd['id_user']; ?>"><?php echo $xd['username']; ?></option>
			        <?php 
			}
			?>
			    </select>
			    <div class="form-group">
			    <label for="exampleFormControlSelect1">Member :</label>
			    <select name="member"  class="form-control" id="exampleFormControlSelect1">
			    	<option value="<?php echo $x['id_member']; ?>"><?php echo $x['nama']; ?></option>
				<?php foreach ($db->mem() as $xd ) {
		
				?>
				<option value="<?php echo $xd['id_member']; ?>"><?php echo $xd['nama']; ?></option>
			        <?php }?>
			  </select>
			  </div>
				</div>
					
		<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
			
</div>
		
        <?php 
			}
			?>

<script src="../../vendor/ckeditor/ckeditor.js"></script>
