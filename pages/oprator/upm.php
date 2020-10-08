
<?php
			include '../../conn/db_member.php';
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
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="../../js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="../../css/datepicker.css">

	<div class="container-fluid col-md-6 col-md-offset-3">
		<h2 style="text-align: center;">Update Data member</h2>
		<form action="../../system/prosesMember.php?aksi=update" method="post" enctype="multipart/form-data">
			<?php foreach ($db->edit($_GET['id']) as $d){
			 ?>
			<div class="form-group">
				<label>No Id :</label>
				<input type="hidden" name="id" value="<?php echo$d['id_member']; ?>">
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="no_id" value="<?php echo$d['no_id']; ?>" required="required">
			</div>
			<div class="form-group">
				<label>Nama :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" value="<?php echo$d['nama']; ?>" required="required">
			</div>
			<div class="form-group">
				<label>NPA :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="npa" value="<?php echo$d['npa']; ?>" required="required">
			</div>
			<div class="form-group">
				<label>TTL :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="ttl" value="<?php echo$d['ttl']; ?>" required="required">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlSelect1">Jenis Kelamin :</label>
			    <select name="jk" class="form-control" id="exampleFormControlSelect1">     
				<option value="<?php echo$d['jk']; ?>"><?php echo$d['jk']; ?></option>
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option> 
			    </select>
			  </div>
			  <div class="form-group">
   				 <label for="exampleFormControlTextarea1">Alamat :</label>
    			<textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo$d['alamat']; ?> </textarea>
 			 </div>
 			 <div class="form-group">
				<label>No TLP :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="tlp" value="<?php echo$d['tlp']; ?>" required="required">
			</div>
			<div class="form-group">
				<label>Email :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="mail" value="<?php echo$d['email']; ?>" required="required">
			</div>
			<div class="form-group">
				<label>IG :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="ig" value="<?php echo$d['ig']; ?>" required="required">
			</div>
			<div class="form-group">
				<label>Facebook :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="fb" value="<?php echo$d['fb']; ?>" required="required">
			</div>
			<div class="form-group">
				<label>Domisili :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="domisili" value="<?php echo$d['domisili']; ?>" required="required">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlSelect1">Status Keanggotaan :</label>
			    <select name="anggota" class="form-control" id="exampleFormControlSelect1">
			    <option value="<?php echo$d['status_keanggotaan']; ?>"><?php echo$d['status_keanggotaan']; ?></option>
				     
				<option value="Honorary Member">Honorary Member</option>
				<option value="Diplomate">Diplomate</option> 
				<option value="Contributors">Contributors</option> 
				<option value="General member">General member</option> 
			    </select>
			  </div>
			  <div class="form-group">
				<label>Keterangan :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="ket" value="<?php echo$d['keterangan']; ?>" required="required">
			</div>
			<div class="form-group">
				<label>Nama Clinic :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama_clinic" value="<?php echo$d['nama_clinic']; ?>" required="required">
			</div>
			<div class="form-group">
				<label>Alamat Clinic :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="alamat_clinic" value="<?php echo$d['alamat_clinic']; ?>" required="required">
			</div>
			<div class="form-group">
				<label>No TLP Clinic :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="no_tlp_clinic" value="<?php echo$d['no_tlp_clinic']; ?>" required="required">
			</div>
					
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
</div>
		
        <?php 
			}
			?>