<?php 
include '../conn/koneksi.php';
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
$tgldaftar = $_POST['tgldaftar'];
$ket = $_POST['ket'];
$nama_clinic = $_POST['nama_clinic'];
$alamat_clinic = $_POST['alamat_clinic'];
$no_tlp_clinic = $_POST['no_tlp_clinic'];
$score = $_POST['score'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:../pages/admin/member.php?gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], '../img/member/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO member VALUES(NULL,'$no_id','$nama','$npa','$ttl','$jk','$alamat','$tlp','$mail','$ig','$fb','$domisili','$anggota','$tgldaftar','$ket','$nama_clinic','$alamat_clinic','$no_tlp_clinic','$xx','$score')");
		header("location:../pages/admin/member.php?alert=berhasil");
	}else{
		header("location:../pages/admin/member.php?alert=gagal_ukuran");
	}
}