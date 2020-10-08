<?php
			include 'nav.php';
			include '../../conn/koneksi.php';
			$id = $_GET['id'];
			$data = mysqli_query($koneksi,"SELECT * from iyuran LEFT JOIN member ON iyuran.id_member=member.id_member LEFT JOIN tahun ON iyuran.id_tahun=tahun.id_tahun where id_iyuran='$id'");
			while($d = mysqli_fetch_array($data)){
				?>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="../../js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="../../css/datepicker.css">
	
		<h2 style="text-align: center;">UBAH DATA IURAN</h2>
		<div class="container-fluid col-md-6 col-md-offset-3">
		<form action="../../system/update_iyuran.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<input type="hidden" class="form-control"  name="id" value="<?php echo $d['id_iyuran']; ?>">
				<label>Nama Member :</label>
				<input type="text" class="form-control" placeholder="nama" value="<?php echo $d['nama']; ?>" name="nama" readonly>
				<label>Tahun :</label>
				<input type="text" class="form-control" placeholder="nama" value="<?php echo $d['tahun']; ?>" name="nama" readonly>
				<div class="form-group">
			    <label for="exampleFormControlSelect1">status :</label>
			    <select name="status" class="form-control" id="exampleFormControlSelect1">   
				<option value="<?php echo $d['status']; ?>"><?php echo $d['status']; ?></option>
				<option value="SUDAH">SUDAH</option>
				<option value="BELUM">BELUM</option>
			  </select>
				<label>Tanggal :</label>
            <input type="text"  name="tanggal"  class="form-control datepicker" value="<?php echo $d['tanggal']; ?>" required="required">
            <?php include '../../system/date.php'; ?>
			</div>		
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
		</form>
		</div>
	
<?php } ?>
