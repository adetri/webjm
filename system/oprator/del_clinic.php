<?php 
include '../conn/koneksi.php';
$id = $_GET['id'];

		mysqli_query($koneksi, "DELETE FROM iyuran Where id_iyuran='$id'");
		header("location:../pages/admin/clinic.php?alert=berhasil");
	?>