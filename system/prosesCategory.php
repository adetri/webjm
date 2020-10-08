

<?php include '../conn/dbcategory.php';
$db=new database();

$aksi = $_GET['aksi'];
if ($aksi=="tambah_category") {
	$db->input($_POST['category']);
 	header("location:../pages/admin/category.php?alert=berhasil");
	# code...
}


elseif ($aksi=="hapus") {
	$db->hapus($_GET['id']);
	header("location:../pages/admin/category.php?alert=berhasil");
	# code...
}
elseif ($aksi=="update") {
		$db->update($_POST['id'],
		 $_POST['category']);
		header("location:../pages/admin/category.php?alert=berhasil");
	# code...
}



 ?>


