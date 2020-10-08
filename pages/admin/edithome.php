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

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="../../js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="../../css/datepicker.css">
	
		<h2 style="text-align: center;">HOME</h2>
		<div class="container-fluid col-md-6 col-md-offset-3">
		<form action="../../system/prosesHome.php?aksi=updatetext" method="post" enctype="multipart/form-data">
			<?php foreach ($db->edit($_GET['id']) as $d){
			 ?>
			<div class="form-group">
				<input type="hidden" class="form-control"  name="id" value="<?php echo $d['id']; ?>">
				<label>Nama :</label>
				<input type="text" class="form-control" placeholder="nama" value="<?php echo $d['nama_web']; ?>" name="nama"  >				<label>Judul :</label>
				<input type="text" class="form-control" placeholder="nama" value="<?php echo $d['judul']; ?>" name="judul"  >
				<label>No Tlp :</label>
				<input type="text" class="form-control" placeholder="tlp" value="<?php echo $d['tlp']; ?>" name="tlp"  >
				<div class="form-group">
   				 <label for="exampleFormControlTextarea1">Alamat :</label>
   				 <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="5"><?php echo $d['alamat']; ?></textarea>
    		<label>IG:</label>
				<input type="text" class="form-control" placeholder="ig" value="<?php echo $d['ig']; ?>" name="ig"  >
				<label>FB:</label>
				<input type="text" class="form-control" placeholder="fb" value="<?php echo $d['fb']; ?>" name="fb"  >
				<div class="form-group">
   				 <label for="exampleFormControlTextarea1">IKGEI meaning :</label>
   				 <textarea class="ckeditor" id="ckeditor" name="deskripsi"  =""><?php echo $d['deskripsi']; ?></textarea>
   				 <div class="form-group">
   				 <label for="exampleFormControlTextarea1">Visi & Misi :</label>
   				 <textarea class="ckeditor" id="ckeditor" name="visimisi"  =""><?php echo $d['visimisi']; ?></textarea>
   				 <label for="exampleFormControlTextarea1">Strucktur Organisasi :</label>
   				 <textarea class="ckeditor" id="ckeditor" name="strucktur" ><?php echo $d['strucktur']; ?></textarea>
   				
   				 <label>Mail:</label>
				<input type="text" class="form-control" placeholder="ig" value="<?php echo $d['mail']; ?>" name="mail"  >
						<div class="form-group">
   				 <label for="exampleFormControlTextarea1">Maps :</label>
   				 <textarea class="form-control" id="exampleFormControlTextarea1" name="maps" rows="5"><?php echo $d['maps']; ?></textarea>
 			 </div>
 			 	 <label for="exampleFormControlTextarea1">Content :</label>
   				 <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="5"><?php echo $d['content']; ?></textarea>
 			 </div>
			
			</div>		
			
		</form>
		<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</div>
	
<?php } ?>
<script src="../../vendor/ckeditor/ckeditor.js"></script>