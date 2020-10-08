<?php include 'nav.php';
include '../../conn/db_jabatan.php';
$db=new database();
$show= $db->show();

 ?>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="../../js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="../../css/datepicker.css">

	<div class="container-fluid col-md-6 col-md-offset-3">
		<h2 style="text-align: center;">Tambah Data Pengurus</h2>
		<form action="../../system/prosesPengurus.php?aksi=tambah" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required="required">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlSelect1">Jenis Kelamin :</label>
			    <select name="jk" class="form-control" id="exampleFormControlSelect1">     
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option> 
			    </select>
			  </div>
			<div class="form-group">
   				 <label for="exampleFormControlTextarea1">Alamat :</label>
    			<textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
 			 </div>
 			 <div class="form-group">
				<label>No Telphone</label>
				<input type="text" class="form-control" placeholder="Masukkan No Tlp" name="tlp" required="required">
			</div>
			<div class="form-group">
				<label>Mail :</label>
				<input type="text" class="form-control" placeholder="Masukkan Email" name="mail" required="required">
			</div>
			<div class="form-group">
				<label>Instagram :</label>
				<input type="text" class="form-control" placeholder="Masukkan IG" name="ig" required="required">
			</div>
			<div class="form-group">
				<label>Facebook :</label>
				<input type="text" class="form-control" placeholder="Masukkan Facebook" name="fb" required="required">
			</div>
			<div class="form-group">
				<label>Domisili :</label>
				<input type="text" class="form-control" placeholder="Masukkan Domisili" name="domisili" required="required">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlSelect1">Jabatan</label>
			    <select name="jabatan" class="form-control" id="exampleFormControlSelect1">   
			    <?php foreach ($show as $d){
			    ?>  
				<option value="<?php echo $d['id_jabatan']; ?>"> <?php echo $d['nama_jabatan']; ?> </option>
				<?php } ?>
				</select>
			  </div>
			<div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
</div>
		
