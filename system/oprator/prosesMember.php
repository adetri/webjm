<?php include '../conn/db_member.php';
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
	header("location:../pages/admin/article.php?gagal_ekstensi");
		}else{
			if($ukuran < 1044070){		
				unlink('../img/member/'.$lama);
				$xx = $rand.'_'.$filename;
				move_uploaded_file($_FILES['foto']['tmp_name'], '../img/member/'.$rand.'_'.$filename);
				$db->input($_POST['no_id'],
					$_POST['nama'],
					$_POST['npa'],
					$_POST['ttl'],
					$_POST['jk'],
					$_POST['alamat'],
					$_POST['tlp'],
					$_POST['mail'],
					$_POST['ig'],
					$_POST['fb'],
					$_POST['domisili'],
					$_POST['anggota'],
					$_POST['tgldaftar'],
					$_POST['ket'],
					$_POST['nama_clinic'],
					$_POST['alamat_clinic'],
					$_POST['no_tlp_clinic'],
					$xx,
					$_POST['score']);
				header("location:../pages/admin/member.php?alert=berhasil");
			}else{
				header("location:../pages/admin/member.php?alert=gagal_ukuran");
			}
}

}
elseif ($aksi=="hapus") {
	$db->hapus($_GET['id']);
	header("location:../pages/admin/member.php?alert=berhasil");
	# code...
}
elseif ($aksi=="update") {
		$db->update($_POST['id'],
		 $_POST['no_id'],
					$_POST['nama'],
					$_POST['npa'],
					$_POST['ttl'],
					$_POST['jk'],
					$_POST['alamat'],
					$_POST['tlp'],
					$_POST['mail'],
					$_POST['ig'],
					$_POST['fb'],
					$_POST['domisili'],
					$_POST['anggota'],
					$_POST['tgldaftar'],
					$_POST['ket'],
					$_POST['nama_clinic'],
					$_POST['alamat_clinic'],
					$_POST['no_tlp_clinic']);
		header("location:../pages/admin/member.php?alert=berhasil");
	# code...
}
elseif ($aksi=="updatefoto") {
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
				move_uploaded_file($_FILES['foto']['tmp_name'], '../img/member/'.$rand.'_'.$filename);
				$db->updatefoto($_POST['id'],$xx);
				header("location:../pages/admin/member.php?alert=berhasil");
		}else{
				header("location:../pages/admin/member.php?alert=gagal_ukuran");
			}
}
	# code...
}



 ?>




















