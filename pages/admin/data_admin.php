

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <a href="pages/inputadmin.php" <button class="btn"  ><i class="fa fa-bars"></i>Tambah</button> </a>
	
<div>
	<table class="table table-sm">
	  <thead>
		<tr>
		  <th scope="col">#</th>
		  <th scope="col">Usename</th>
		  <th scope="col">Role</th>
		  <th scope="col">Foto</th>
		  <th scope="col">Handle</th>
		</tr>
		</thead>
	  <tbody>
		<?php 
			include '../conn/koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select * from user");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['username']; ?></td>
					<td><?php echo $d['role']; ?></td>
					<td><img src="../img/<?php echo $d['foto_user'] ?>" width="35" height="40"></td>
					<td>
					<a href="pages/upadmin.php?id=<?php echo $d['id_user']; ?>"<button class="btn"><i class="fa fa-folder"></i>Ubah</button></a>
					<a href="../system/del.php?id=<?php echo $d['id_user']; ?>"<button class="btn"><i class="fa fa-close"></i>Hapus</button></a>
					</td>
				</tr>
				<?php 
			}
			?>
	  </tbody>
	</table>
	</div>
