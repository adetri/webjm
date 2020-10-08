<?php 
include '../conn/koneksi.php';
$id=$_POST['id'];
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$lama=$_POST['foto_lama'];

if(!in_array($ext,$ekstensi) ) {
	header("location:../pages/admin/article.php?member");
}else{
	
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		unlink('../img/member/'.$lama);
		move_uploaded_file($_FILES['foto']['tmp_name'], '../img/member/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "update member set foto_member='$xx' where id_member='$id'");
		header("location:../pages/admin/member.php?alert=berhasil");
	}else{
		header("location:../pages/admin/member.php?alert=gagal_ukuran");
	}
}