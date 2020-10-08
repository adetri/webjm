<?php include 'nav.php';
include '../../conn/koneksi.php'; ?>

<script src="wysihtml/dist/wysihtml-toolbar.min.js"></script>

<!-- rules defining tags, attributes and classes that are allowed -->
<script src="wysihtml/parser_rules/advanced_and_extended.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="../../js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="../../css/datepicker.css">
	<div class="container-fluid col-md-6 col-md-offset-3">
		


		<h2 style="text-align: center;">Article</h2>
		<form action="../../system/prosesA.php?aksi=tambah" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Judul :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="judul" required="required">
			</div>
			

			<div class="form-group">
   				 <label for="exampleFormControlTextarea1">Deskripsi :</label>
   				 <textarea class="ckeditor" id="ckeditor" name="deskripsi"></textarea>
    		
 			 </div>
 			 <div class="form-group">
            <label>Tanggal:</label>
            <input type="text"  name="tanggal"  class="form-control datepicker"  required/>
            <?php include '../../system/date.php'; ?>
        	</div>
        	<div >
			   <div class="form-group">
			    <label for="exampleFormControlSelect1">Category :</label>
			    <select name="category" class="form-control" id="exampleFormControlSelect1">    
				<?php 
			$no = 0;
			$data = mysqli_query($koneksi,"select * from category");
			while($d = mysqli_fetch_array($data)){
			$no++;	
				?>
				<option value="<?php echo $d['id_category']; ?>"><?php echo $d['category']; ?></option>
			        <?php 
			}
			?>
			  </select>
			  <div class="form-group">
			    <label for="exampleFormControlSelect1">Admin :</label>
			    <select name="admin" class="form-control" id="exampleFormControlSelect1">     
			<?php 
			$no = 0;
			$data = mysqli_query($koneksi,"select * from user");
			while($d = mysqli_fetch_array($data)){
			$no++;	
				?>
				<option value="<?php echo $d['id_user']; ?>"> <?php echo $d['username']; ?> </option>
			        <?php 
			}
			?>
			    </select>
			 <div class="form-group">
			    <label for="exampleFormControlSelect1">Member :</label>
			    <select name="member" class="form-control" id="exampleFormControlSelect1">     
			<?php 
			$no = 0;
			$data = mysqli_query($koneksi,"select * from member");
			while($d = mysqli_fetch_array($data)){
			$no++;	
				?>
				<option value="<?php echo $d['id_member']; ?>"> <?php echo $d['nama']; ?> </option>
			        <?php 
			}
			?>
			    </select>
			    <div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>	
			  </div>
				</div>
					
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
</div>
<script src="../../vendor/ckeditor/ckeditor.js"></script>
