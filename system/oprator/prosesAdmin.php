<?php include '../conn/db_user.php';
$db=new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
	$rand = rand();
	$ekstensi =  array('png','jpg','jpeg','gif');
	$filename = $_FILES['foto']['name'];
	$ukuran = $_FILES['foto']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	if(!in_array($ext,$ekstensi) ) {
	header("location:../pages/admin/article.php?gagal_ekstensi");
		}else{
			if($ukuran < 1044070){		
				$xx = $rand.'_'.$filename;
				move_uploaded_file($_FILES['foto']['tmp_name'], '../img/'.$rand.'_'.$filename);

				$db->input($_POST['nama'], md5($_POST['password']),$_POST['role'],$xx);

				header("location:../pages/admin/admin.php?alert=berhasil");
			}else{
				header("location:../pages/admin/admin.php?alert=gagal_ukuran");
			}
}

}
elseif ($aksi=="hapus") {
	$db->hapus($_GET['id']);
	header("location:../pages/admin/admin.php?alert=berhasil");
	# code...
}
elseif ($aksi=="update") {

	$rand = rand();
	$ekstensi =  array('png','jpg','jpeg','gif');
	$filename = $_FILES['foto']['name'];
	$ukuran = $_FILES['foto']['size'];
	
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	if(!in_array($ext,$ekstensi) ) {
	header("location:../pages/admin/article.php?gagal_ekstensi");
		}else{
			if($ukuran < 1044070){		
				$xx = $rand.'_'.$filename;
				move_uploaded_file($_FILES['foto']['tmp_name'], '../img/'.$rand.'_'.$filename);

				$db->update($_POST['id'], $_POST['nama'], $_POST['role'], $xx);

				header("location:../pages/admin/admin.php?alert=berhasil");
			}else{
				header("location:../pages/admin/admin.php?alert=gagal_ukuran");
			}
}

		
		header("location:../pages/admin/admin.php?alert=berhasil");
	# code...
}



 ?>


