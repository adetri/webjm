<!DOCTYPE html>
<html>
<head>
	<title>Print out data member</title>
</head>
<body>
 
	<center>
 
		<h2>DATA MEMBER</h2>
		
	</center>
 
	<?php 
	include '../../conn/koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>No Id</th>
			<th>Nama</th>
			<th>Tgl Daftar</th>
			<th>NPA</th>
			<th>TTL</th>
			<th>Gender</th>
			<th>Alamat</th>
			<th>No Tlp</th>
			<th>Email</th>
			<th>Domisili</th>
			<th>Status anggota</th>
			<th>KET</th>
			
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"SELECT * from member");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['no_id']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['tgl_daftar']; ?></td>
			<td><?php echo $data['npa']; ?></td>
			<td><?php echo $data['ttl']; ?></td>
			<td><?php echo $data['jk']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['tlp']; ?></td>
			<td><?php echo $data['email']; ?></td>
			<td><?php echo $data['domisili']; ?></td>
			<td><?php echo $data['status_keanggotaan']; ?></td>
			<td><?php echo $data['keterangan']; ?></td>

		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>