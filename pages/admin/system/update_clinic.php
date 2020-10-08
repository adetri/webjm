<?php 
include '../conn/koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tlp = $_POST['tlp'];


		mysqli_query($koneksi, "UPDATE clinic SET nama_clinic='$nama', alamat_clinic='$alamat', no_tlp_clinic='$tlp' WHERE id_clinic='$id'");
		header("location:../pages/admin/nav.php?alert=berhasil");
	?>