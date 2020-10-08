<?php 
include '../conn/koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kontak = $_POST['kontak'];


$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$lama=$_POST['foto_lama'];

if(!in_array($ext,$ekstensi) ) {
	header("location:../pages/admin/member.php?gagal_ekstensi");
}else{
	
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		unlink('../img/member'.$lama);
		move_uploaded_file($_FILES['foto']['tmp_name'], '../img/member/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "update member set nama_member='$nama', alamat='$alamat', kontak='$kontak', foto_member='$xx' where id_member='$id'");
		header("location:../pages/admin/member.php?alert=berhasil");
	}else{
		header("location:../pages/admin/member.php?alert=gagal_ukuran");
	}
}