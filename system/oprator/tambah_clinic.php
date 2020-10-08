<?php 
include '../conn/koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tlp = $_POST['tlp'];


		mysqli_query($koneksi, "INSERT INTO clinic VALUES(NULL,'$nama','$alamat','$tlp')");
		header("location:../pages/admin/nav.php?alert=berhasil");
	?>