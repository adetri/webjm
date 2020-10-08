

<?php include '../conn/db_jabatan.php';
$db=new database();

$aksi = $_GET['aksi'];
if ($aksi=="tambah") {
	$db->input($_POST['jabatan'],$_POST['nojabatan']);
 	header("location:../pages/admin/jabatan.php?alert=berhasil");
	# code...
}


elseif ($aksi=="hapus") {
	$db->hapus($_GET['id']);
	header("location:../pages/admin/jabatan.php?alert=berhasil");
	# code...
}
elseif ($aksi=="update") {
		$db->update($_POST['id'],
		 $_POST['jabatan'],$_POST['nojabatan']);
		header("location:../pages/admin/jabatan.php?alert=berhasil");
	# code...
}



 ?>


