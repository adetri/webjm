<?php 
include '../conn/koneksi.php';
$id = $_POST['id'];
$scoreawal = $_POST['scoreawal'];
$score = $_POST['score'];


$score = $scoreawal + $score;

		mysqli_query($koneksi, "UPDATE member SET score='$score' WHERE id_member='$id'");
		header("location:../pages/admin/nav.php?alert=berhasil");
	?>