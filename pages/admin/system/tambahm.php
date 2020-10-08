<?php 
include '../conn/koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kontak = $_POST['kontak'];

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
		mysqli_query($koneksi, "INSERT INTO member VALUES(NULL,'$nama','$alamat','$kontak','$xx')");
		header("location:../pages/admin/member.php?alert=berhasil");
	}else{
		header("location:../pages/admin/member.php?alert=gagal_ukuran");
	}
}