<?php 
include '../conn/koneksi.php';
$nama = $_POST['nama'];



		mysqli_query($koneksi, "INSERT INTO category VALUES(NULL,'$nama')");
		header("location:../pages/admin/nav.php?alert=berhasil");
	?>