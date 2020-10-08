c<html>
<head>
<title>Bootstrap Example</title>
<?php include 'nav.php';
include '../../conn/koneksi.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
<body>
	<h2 style="text-align: center;">Data Iuran</h2>
<div class="container-fluid">

	<div class="row">
		  <div class="col-md-9">
		  	<a href="insert.php" <button class="btn"  ><i class="fa fa-bars"></i>Tambah</button> </a>
		  </div>
  			<div class="col-md-3">
		<form action="clinic.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
	<div><?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
	</div>
</div>
</form>

	</div>
	<table class="table table table-bordered text-center">
	  <thead>
		<tr class="text-center">
		  <th width="1%"scope="col" class="text-center text-uppercase">#</th>
		  <th scope="col" class="text-center text-uppercase">Nama Member</th>
		  <th width="1%"class=" text-center text-uppercase" scope="col">Status</th>
		   <th width="1%"class=" text-center text-uppercase" scope="col">tahun</th>
		  <th width="10%"class=" text-center text-uppercase" scope="col">tanggal</th>
		  <th  width="8%"class="text-center text-uppercase" scope="col">Action</th>
		</tr>
		</thead>
	  <tbody>
	
				<?php 
				$batas = 10;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				$next = $halaman + 1;
				
				
				$data = mysqli_query($koneksi,"select * from iyuran");	
				$jumlah_data = mysqli_num_rows($data);
				$total_halaman = ceil($jumlah_data / $batas);

 				if(isset($_GET['cari'])){
				$cari = $_GET['cari'];
				$data_pegawai = mysqli_query($koneksi,"SELECT * FROM iyuran LEFT JOIN member ON member.id_member = iyuran.id_member right JOIN tahun on iyuran.id_tahun=tahun.id_tahun where nama or tahun like '%".$cari."%' limit $halaman_awal, $batas");
				}else{
					$data_pegawai = mysqli_query($koneksi,"SELECT * FROM member LEFT JOIN iyuran ON member.id_member = iyuran.id_member left join tahun on iyuran.id_tahun=tahun.id_tahun limit $halaman_awal, $batas");
				}
				$nomor = $halaman_awal+1;
				while($d = mysqli_fetch_array($data_pegawai)){
					?>
				<tr>
					<td><?php echo $nomor++; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['status']; ?></td>
					<td><?php echo $d['tahun']; ?></td>
					<td><?php echo $d['tanggal']; ?></td>
					<td>
					<a href="updateiyuran.php?id=<?php echo $d['id_iyuran']; ?>"<button class="btn"><i class="fa fa-folder"></i>Ubah</button></a>
					<a href="../../system/del_clinic.php?id=<?php echo $d['id_iyuran']; ?>"<button class="btn"><i class="fa fa-close"></i>Hapus</button></a>
					</td>
				</tr>
				<?php 
			}
			?>
	  </tbody>
	</table>
		<nav aria-label="Page navigation ">
  <ul class="pagination">
    <li>
      <a <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?> aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
    <li><a href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
    <?php
				}
				?>		
    <li>
      <a <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?> aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
	</div>
</body>
</html>
