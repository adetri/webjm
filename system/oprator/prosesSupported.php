<?php include '../conn/db_supported.php';
$db=new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
	$rand = rand();
	$ekstensi =  array('png','jpg','jpeg','gif');
	$filename = $_FILES['foto']['name'];
	$ukuran = $_FILES['foto']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	if(!in_array($ext,$ekstensi) ) {
	header("location:../pages/admin/supported.php?gagal_ekstensi");
		}else{
			if($ukuran < 1044070){		
				$xx = $rand.'_'.$filename;
				move_uploaded_file($_FILES['foto']['tmp_name'], '../img/supported/'.$rand.'_'.$filename);
				$db->input($_POST['nama'],$xx);
				header("location:../pages/admin/supported.php?alert=berhasil");
			}else{
				header("location:../pages/admin/supported.php?alert=gagal_ukuran");
			}
}

}
elseif ($aksi=="hapus") {
	$db->hapus($_GET['id']);
	header("location:../pages/admin/supported.php?alert=berhasil");
	# code...
}
elseif ($aksi=="update") {
		$db->update($_POST['id'],
		 $_POST['judul']);
		header("location:../pages/admin/supported.php?alert=berhasil");
	# code...
}
elseif ($aksi=="updatefoto") {
$rand = rand();
	$ekstensi =  array('png','jpg','jpeg','gif');
	$filename = $_FILES['foto']['name'];
	$ukuran = $_FILES['foto']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	$lama=$_POST['foto_lama'];
	if(!in_array($ext,$ekstensi) ) {
	header("location:../pages/admin/supported.php?gagal_ekstensi");
		}else{
			if($ukuran < 1044070){		
				$xx = $rand.'_'.$filename;
				unlink('../img/supported/'.$lama);
				move_uploaded_file($_FILES['foto']['tmp_name'], '../img/supported/'.$rand.'_'.$filename);
				
				$db->updatefoto($_POST['id'],$xx);
				header("location:../pages/admin/supported.php?alert=berhasil");
		}else{
				header("location:../pages/admin/supported.php?alert=gagal_ukuran");
			}
}
	# code...
}


 ?>


