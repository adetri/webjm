<?php 
include '../conn/koneksi.php';
$id = $_POST['id'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$role = $_POST['role'];


$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$lama=$_POST['foto_lama'];

if(!in_array($ext,$ekstensi) ) {
header("location:../pages/admin/nav.php?gagal_ekstensi");
}else{

if($ukuran < 1044070){		
	$xx = $rand.'_'.$filename;
	unlink('../img/'.$lama);
	move_uploaded_file($_FILES['foto']['tmp_name'], '../img/'.$rand.'_'.$filename);
	mysqli_query($koneksi, "update user set username='$username', password='$password', role='$role', foto_user='$xx' where id_user='$id'");
	header("location:../pages/admin/nav.php?alert=berhasil");
}else{
	header("location:../pages/admin/nav.php?alert=gagal_ukuran");
}
}