<?php include 'nav.php'; ?>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="../../js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="../../css/datepicker.css">

	<div class="container-fluid col-md-6 col-md-offset-3">
		<h2 style="text-align: center;">Tambah Data Special Member</h2>
		<form action="../../system/prosesSpecialMember.php?aksi=tambah" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" required="required">
			</div>
			<div class="form-group">
				<label>NPA :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="npa" required="required">
			</div>
			<div class="form-group">
				<label>TTL :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="ttl" required="required">
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
				<label>No TLP :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="tlp" required="required">
			</div>
			<div class="form-group">
				<label>Email :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="mail" required="required">
			</div>
			<div class="form-group">
				<label>IG :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="ig" required="required">
			</div>
			<div class="form-group">
				<label>Facebook :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="fb" required="required">
			</div>
			<div class="form-group">
				<label>Domisili :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="domisili" required="required">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlSelect1">Status Keanggotaan :</label>
			    <select name="anggota" class="form-control" id="exampleFormControlSelect1">     
				<option value="Honorary">Honorary</option>
				<option value="Special Member">Special Member</option> 
				<option value="Contributors">Contributors</option> 
			    </select>
			  </div>
			  <div class="form-group">
				<label>Jabatan :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="jabatan" required="required">
			  <label>Tanggal Mendaftar:</label>			
			  </div>
            <input type="text"  name="tgldaftar"  class="form-control datepicker"  required/>
            <?php include '../../system/date.php'; ?>
            <div class="form-group">
				<label>Keterangan :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="ket" required="required">
			</div>
			<div class="form-group">
				<label>Nama Clinic :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama_clinic" required="required">
			</div>
			<div class="form-group">
				<label>Alamat Clinic :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="alamat_clinic" required="required">
			</div>
			<div class="form-group">
				<label>No TLP Clinic :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="no_tlp_clinic" required="required">
			</div>
			<div class="form-group">
				<label>Foto :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>		
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
</div>
		