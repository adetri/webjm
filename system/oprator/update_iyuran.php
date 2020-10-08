<?php 
include '../conn/koneksi.php';
$id = $_POST['id'];
$status = $_POST['status'];
$tgl = $_POST['tanggal'];


		mysqli_query($koneksi, "UPDATE iyuran SET status='$status', tanggal='$tgl' WHERE id_iyuran='$id'");
		header("location:../pages/admin/nav.php?alert=berhasil");
	?>