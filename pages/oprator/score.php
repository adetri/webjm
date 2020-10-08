<?php
			include 'nav.php';
			include '../../conn/koneksi.php';
			$id = $_GET['id'];
			$data = mysqli_query($koneksi,"select * from member where id_member='$id'");
			while($d = mysqli_fetch_array($data)){
				?>

	
		<h2 style="text-align: center;">Tambah Score</h2>
		<div class="container-fluid col-md-6 col-md-offset-3">
		<form action="../../system/score.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<input type="hidden" class="form-control"  name="id" value="<?php echo $d['id_member']; ?>">
				<label>Score saat ini :</label>
				<input class="form-control" type="text"  name="scoreawal" value="<?php echo $d['score']; ?>" placeholder="Readonly input here…" readonly>
			</div>	
			<div class="form-group">
				<label>Nama Member :</label>
				<input type="text" class="form-control" placeholder="nama" value="<?php echo $d['nama']; ?>" name="nama" readonly>
			</div>		
			<div class="form-group">
				<label>Tambah Score :</label>
				<input type="text" class="form-control" placeholder="nama" name="score" required="required">
			</div>	
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
		</div>
	
<?php } ?>
