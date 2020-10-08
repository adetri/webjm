<?php include '../conn/db_home.php';
$db=new home();

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
				move_uploaded_file($_FILES['foto']['tmp_name'], '../img/article/'.$rand.'_'.$filename);
				$db->input($_POST['judul'],$_POST['deskripsi'],$_POST['tanggal'],$xx,$_POST['admin'],$_POST['category'],$_POST['member']);
				header("location:../pages/admin/article.php?alert=berhasil");
			}else{
				header("location:../pages/admin/article .php?alert=gagal_ukuran");
			}
}

}
elseif ($aksi=="hapus") {
	$db->hapus($_GET['id']);
	header("location:../pages/admin/article.php?alert=berhasil");
	# code...
}
elseif ($aksi=="updatetext") {
		$db->updatetext($_POST['id'],
		 $_POST['nama'],
		  $_POST['tlp'],
		   $_POST['alamat'],
		    $_POST['ig'],
		     $_POST['fb'], 
		     $_POST['deskripsi'], 
		     $_POST['mail'], 
		     $_POST['maps'],
		 $_POST['visimisi'],
		 $_POST['strucktur'],
		 $_POST['content'],
		 $_POST['judul']
		);
		header("location:../pages/admin/homedash.php?alert=berhasil");
	# code...
}
elseif ($aksi=="updatelogo") {
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
				$xx = $rand.'_'.$filename;
				unlink('../img/home/'.$lama);
				move_uploaded_file($_FILES['foto']['tmp_name'], '../img/home/'.$rand.'_'.$filename);
				$db->updatelogo($_POST['id'],$xx);
				header("location:../pages/admin/homedash.php?alert=berhasil");
		}else{
				header("location:../pages/admin/homedash.php?alert=gagal_ukuran");
			}
}
	# code...
}

elseif ($aksi=="updatelogo1") {
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
				$xx = $rand.'_'.$filename;
				unlink('../img/home/'.$lama);
				move_uploaded_file($_FILES['foto']['tmp_name'], '../img/home/'.$rand.'_'.$filename);
				$db->updatelogo1($_POST['id'],$xx);
				header("location:../pages/admin/homedash.php?alert=berhasil");
		}else{
				header("location:../pages/admin/homedash.php?alert=gagal_ukuran");
			}
}
	# code...
}

elseif ($aksi=="updatelogo2") {
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
				$xx = $rand.'_'.$filename;
				unlink('../img/home/'.$lama);
				move_uploaded_file($_FILES['foto']['tmp_name'], '../img/home/'.$rand.'_'.$filename);
				$db->updatelogo2($_POST['id'],$xx);
				header("location:../pages/admin/homedash.php?alert=berhasil");
		}else{
				header("location:../pages/admin/homedash.php?alert=gagal_ukuran");
			}
}
	# code...
}

elseif ($aksi=="updatebg") {
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
				$xx = $rand.'_'.$filename;
				unlink('../img/home/'.$lama);
				move_uploaded_file($_FILES['foto']['tmp_name'], '../img/home/'.$rand.'_'.$filename);
				$db->updatebg($_POST['id'],$xx);
				header("location:../pages/admin/homedash.php?alert=berhasil");
		}else{
				header("location:../pages/admin/homedash.php?alert=gagal_ukuran");
			}
}
	# code...
}

elseif ($aksi=="updateabout") {
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
				unlink('../img/home/'.$lama);
				move_uploaded_file($_FILES['foto']['tmp_name'], '../img/home/'.$rand.'_'.$filename);
				$db->updateabout($_POST['id'],$xx);
				header("location:../pages/admin/homedash.php?alert=berhasil");
		}else{
				header("location:../pages/admin/homedash.php?alert=gagal_ukuran");
			}
}
	# code...
}



 ?>


