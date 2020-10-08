<?php 
include '../conn/koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];


		mysqli_query($koneksi, "UPDATE category SET category='$nama' WHERE id_category='$id'");
		header("location:../pages/admin/nav.php?alert=berhasil");
	?>