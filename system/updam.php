<?php 
include '../conn/koneksi.php';
$id=$_POST['id'];
$nama = $_POST['nama'];
$no_id = $_POST['no_id'];
$npa = $_POST['npa'];
$ttl = $_POST['ttl'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$tlp = $_POST['tlp'];
$mail = $_POST['mail'];
$ig = $_POST['ig'];
$fb = $_POST['fb'];
$domisili = $_POST['domisili'];
$anggota = $_POST['anggota'];
$ket = $_POST['ket'];
$nama_clinic = $_POST['nama_clinic'];
$alamat_clinic = $_POST['alamat_clinic'];
$no_tlp_clinic = $_POST['no_tlp_clinic'];



	mysqli_query($koneksi, "update member set no_id='$no_id',
	 nama='$nama',
	  npa='$npa',
	   ttl='$ttl',
	    jk='$jk',
	    alamat='$alamat',
	     tlp='$tlp',
	      email='$mail',
	       ig='$ig',
	        fb='$fb',
	         domisili='$domisili',
	          status_keanggotaan='$anggota',
	           keterangan='$ket',
	            nama_clinic='$nama_clinic',
	             alamat_clinic='$alamat_clinic',
	              no_tlp_clinic='$no_tlp_clinic'
	               where id_member='$id'");
	header("location:../pages/admin/nav.php?alert=berhasil");
?>