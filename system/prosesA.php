<?php include '../conn/dbarticle.php';
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
elseif ($aksi=="update") {
		$db->update($_POST['id'],
		 $_POST['judul'],
		  $_POST['deskripsi'],
		   $_POST['tanggal'],
		    $_POST['admin'],
		     $_POST['category'], 
		     $_POST['member']);
		header("location:../pages/admin/article.php?alert=berhasil");
	# code...
}



 ?>


