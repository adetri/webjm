<?php
			include 'nav.php';
			include '../../conn/db_home.php';
			$db=new home();
			$show= $db->showdb();
			
			foreach ($show as $d) {
				# code...
			
				?>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="../../js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="../../css/datepicker.css">
	
		<h2 style="text-align: center;">HOME</h2>
		<div class="container-fluid col-md-6 col-md-offset-3">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<input type="hidden" class="form-control"  name="id" value="<?php echo $d['id']; ?>">
				<label>Nama :</label>
				<input type="text" class="form-control" placeholder="nama" value="<?php echo $d['nama_web']; ?>" name="nama" readonly>
				<label>Judul :</label>
				<input type="text" class="form-control" placeholder="nama" value="<?php echo $d['judul']; ?>" name="judul" readonly>
				<label>No Tlp :</label>
				<input type="text" class="form-control" placeholder="tlp" value="<?php echo $d['tlp']; ?>" name="nama" readonly>
   				 <div class="form-group">
   				 <label for="exampleFormControlTextarea1">Alamat :</label>
   				 <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="5" readonly><?php echo $d['alamat']; ?></textarea>
    		<label>IG:</label>
				<input type="text" class="form-control" placeholder="ig" value="<?php echo $d['ig']; ?>" name="nama" readonly>
				<label>FB:</label>
				<input type="text" class="form-control" placeholder="fb" value="<?php echo $d['fb']; ?>" name="nama" readonly>
				<div class="form-group">
   				 <label for="exampleFormControlTextarea1">IKGEI meaning :</label>
   				 <textarea class="ckeditor" id="ckeditor" name="deskripsi" readonly=""><?php echo $d['deskripsi']; ?></textarea>
   				 <label for="exampleFormControlTextarea1">Visi & Misi :</label>
   				 <textarea class="ckeditor" id="ckeditor" name="visimisi" readonly=""><?php echo $d['visimisi']; ?></textarea>
   					<label for="exampleFormControlTextarea1">Strucktur Organisasi :</label>
   				 <textarea class="ckeditor" id="ckeditor" name="strucktur" readonly=""><?php echo $d['strucktur']; ?></textarea>
   				
   				 <label>Mail:</label>
				<input type="text" class="form-control" placeholder="ig" value="<?php echo $d['mail']; ?>" name="mail" readonly>
					<div class="form-group">
   				 <label for="exampleFormControlTextarea1">Maps :</label>
   				 <textarea class="form-control" id="exampleFormControlTextarea1" name="maps" rows="5" readonly><?php echo $d['maps']; ?></textarea>
 			 </div>
 			 		<div class="form-group">
   				 <label for="exampleFormControlTextarea1">Content :</label>
   				 <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="5" readonly><?php echo $d['content']; ?></textarea>
 			 </div>
			
			</div>		
			<a href="edithome.php?id=<?php echo $d['id']; ?>"<button class="btn"><input type="" name="" value="Edit Data di atas" class="btn btn-primary"></button></a>
				
			<div class="container-fluid">
				<br><br>
			<img src="../../img/home/<?php echo $d['logo'] ?>" width="150" height="150">
<a href="update_img_logo.php?id=<?php echo $d['id']; ?>&aksi=edit"<button class="btn"><input type="" name="" value="Edit Logo" class="btn btn-primary"></button></a>
<br><br>
<img src="../../img/home/<?php echo $d['logo1'] ?>" width="150" height="150">
<a href="update_img_logo1.php?id=<?php echo $d['id']; ?>&aksi=edit"<button class="btn"><input type="" name="" value="Edit Logo" class="btn btn-primary"></button></a>
<br><br>
<img src="../../img/home/<?php echo $d['logo2'] ?>" width="150" height="150">
<a href="update_img_logo2.php?id=<?php echo $d['id']; ?>&aksi=edit"<button class="btn"><input type="" name="" value="Edit Logo" class="btn btn-primary"></button></a>
<br><br>
			<img src="../../img/home/<?php echo $d['bg'] ?>" width="150" height="150">
<a href="update_img_bg.php?id=<?php echo $d['id']; ?>&aksi=edit"<button class="btn"><input type="" name="" value="Edit Background" class="btn btn-primary"></button></a>
<br><br>
			<img src="../../img/home/<?php echo $d['main'] ?>" width="150" height="150">
<a href="update_img_about.php?id=<?php echo $d['id']; ?>&aksi=edit"<button class="btn"><input type="" name="" value="Edit Foto" class="btn btn-primary"></button></a>
			</div>

		</form>
		
		</div>
	
<?php } ?>
<script src="../../vendor/ckeditor/ckeditor.js"></script>