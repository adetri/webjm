<?php include '../conn/db_pengurus.php';
$db=new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
	$rand = rand();
	$ekstensi =  array('png','jpg','jpeg','gif');
	$filename = $_FILES['foto']['name'];
	$ukuran = $_FILES['foto']['size'];
	$lama=$_POST['foto_lama'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	if(!in_array($ext,$ekstensi) ) {
	header("location:../pages/admin/pengurus.php?gagal_ekstensi");
		}else{
			if($ukuran < 1044070){		
				$xx = $rand.'_'.$filename;
				move_uploaded_file($_FILES['foto']['tmp_name'], '../img/pengurus/'.$rand.'_'.$filename);
				unlink('../img/pengurus/'.$lama);
				$db->input($_POST['nama'],
					$_POST['jk'],
					$_POST['alamat'],
					$_POST['tlp'],
					$_POST['mail'],
					$_POST['ig'],
					$_POST['fb'],
					$_POST['domisili'],
					$_POST['jabatan'],
					$xx);
				header("location:../pages/admin/pengurus.php?alert=berhasil");
			}else{
				header("location:../pages/admin/pengurus.php?alert=gagal_ukuran");
			}
}

}
elseif ($aksi=="hapus") {
	$db->hapus($_GET['id']);
	header("location:../pages/admin/pengurus.php?alert=berhasil");
	# code...
}
elseif ($aksi=="update") {
		$db->update($_POST['id'],
		 $_POST['nama'],
					$_POST['jk'],
					$_POST['alamat'],
					$_POST['tlp'],
					$_POST['mail'],
					$_POST['ig'],
					$_POST['fb'],
					$_POST['domisili'],
					$_POST['jabatan']);
		header("location:../pages/admin/pengurus.php?alert=berhasil");
	# code...
}
elseif ($aksi=="updatefoto") {
$rand = rand();
	$ekstensi =  array('png','jpg','jpeg','gif');
	$filename = $_FILES['foto']['name'];
	$ukuran = $_FILES['foto']['size'];
	$lama=$_POST['foto_lama'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	if(!in_array($ext,$ekstensi) ) {
	header("location:../pages/admin/pengurus.php?gagal_ekstensi");
		}else{
			if($ukuran < 1044070){		
				$xx = $rand.'_'.$filename;
				unlink('../img/pengurus/'.$lama);
				move_uploaded_file($_FILES['foto']['tmp_name'], '../img/pengurus/'.$rand.'_'.$filename);
				$db->updatefoto($_POST['id'],$xx);
				header("location:../pages/admin/pengurus.php?alert=berhasil");
		}else{
				header("location:../pages/admin/pengurus.php?alert=gagal_ukuran");
			}
}
	# code...
}



 ?>




















