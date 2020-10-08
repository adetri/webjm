<?php 
include '../conn/koneksi.php';
$id = $_POST['id'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];
$category = $_POST['category'];
$admin = $_POST ['admin'];
$member = $_POST ['member'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$lama=$_POST['foto_lama'];

if(!in_array($ext,$ekstensi) ) {
	header("location:../pages/admin/article.php?gagal_ekstensi");
}else{
	
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		unlink('../img/article'.$lama);
		move_uploaded_file($_FILES['foto']['tmp_name'], '../img/article/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "update article set judul_article='$judul', deskripsi='$deskripsi', tanggal='$tanggal', id_category='$category', id_user='$admin', foto_article='$xx', id_member='$member' where id_article='$id'");
		header("location:../pages/admin/article.php?alert=berhasil");
	}else{
		header("location:../pages/admin/article.php?alert=gagal_ukuran");
	}
}