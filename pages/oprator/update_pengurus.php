
<?php
			include '../../conn/db_pengurus.php';
			include 'nav.php';
$db = new database();
$id=$_GET['id'];
$show= $db->showjabatan();
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
		<h2 style="text-align: center;">Update Data Pengurus</h2>
		<form action="../../system/prosesPengurus.php?aksi=update" method="post" enctype="multipart/form-data">
			<?php foreach ($db->edit($_GET['id']) as $d){
			 ?>
				<input type="hidden" name="id" value="<?php echo$d['id_pengurus']; ?>">
			<div class="form-group">
				<label>Nama :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" value="<?php echo $d['nama_pengurus']; ?>" required="required">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlSelect1">Jenis Kelamin :</label>
			    <select name="jk"  class="form-control" id="exampleFormControlSelect1">
			    <option value="<?php echo $d['jk']; ?>"><?php echo $d['jk']; ?></option>     
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option> 
			    </select>
			  </div>
			<div class="form-group">
   				 <label for="exampleFormControlTextarea1">Alamat :</label>
    			<textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $d['alamat']; ?></textarea>
 			 </div>
 			 <div class="form-group">
				<label>No Telphone</label>
				<input type="text" class="form-control" placeholder="Masukkan No Tlp" name="tlp" value="<?php echo $d['tlp']; ?>" required="required">
			</div>
			<div class="form-group">
				<label>Mail :</label>
				<input type="text" class="form-control" placeholder="Masukkan Email" name="mail" value="<?php echo $d['email']; ?>" required="required">
			</div>
			<div class="form-group">
				<label>Instagram :</label>
				<input type="text" class="form-control" placeholder="Masukkan IG" name="ig" value="<?php echo $d['ig']; ?>" required="required">
			</div>
			<div class="form-group">
				<label>Facebook :</label>
				<input type="text" class="form-control" placeholder="Masukkan Facebook" name="fb" value="<?php echo $d['fb']; ?>" required="required">
			</div>
			<div class="form-group">
				<label>Domisili :</label>
				<input type="text" class="form-control" placeholder="Masukkan Domisili" name="domisili" value="<?php echo $d['domisili']; ?>" required="required">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlSelect1">Jabatan</label>
			    <select name="jabatan" class="form-control" id="exampleFormControlSelect1">     
			    	<option value="<?php echo $d['id_jabatan']; ?>"><?php echo $d['nama_jabatan']; ?></option>
			     <?php 
			}
			?>  
			    	<?php foreach ($show as $x){ ?>
			    
						<option value="<?php echo $x['id_jabatan']; ?>"><?php echo $x['nama_jabatan']; ?></option>
			
					<?php } ?>		    
			    </select>
			  </div>		
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
</div>
		
       
