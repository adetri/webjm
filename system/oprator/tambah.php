<?php 
include '../conn/koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$role = $_POST['role'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:../pages/admin/nav.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], '../img/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO user VALUES(NULL,'$username','$password','$role','$xx')");
		header("location:../pages/admin/nav.php?alert=berhasil");
	}else{
		header("location:../pages/admin/nav.php?alert=gagal_ukuran");
	}
}