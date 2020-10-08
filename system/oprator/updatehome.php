<?php 
include '../conn/koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tlp = $_POST['tlp'];
$ig = $_POST['ig'];
$fb = $_POST['fb'];
$desk = $_POST['deskripsi'];
$maps = $_POST['maps'];
$mail = $_POST['mail'];

		mysqli_query($koneksi, "UPDATE home SET tlp='$tlp', alamat='$alamat', fb='$fb', ig='$ig', nama_web='$nama', deskripsi='$desk', mail='$mail', maps='$maps' WHERE id='$id'");
		header("location:../pages/admin/nav.php?alert=berhasil");
	?>