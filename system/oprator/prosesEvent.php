

<?php include '../../conn/db_event.php';
$db=new fevent();

function compress($source, $destination, $quality) {
    $info = getimagesize($source);
    if ($info['mime'] == 'image/jpeg') 
        $image = imagecreatefromjpeg($source);
    elseif ($info['mime'] == 'image/gif') 
        $image = imagecreatefromgif($source);
    elseif ($info['mime'] == 'image/png') 
        $image = imagecreatefrompng($source);
    imagejpeg($image, $destination, $quality);
    return $destination;
}

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
	$rand = rand();
	$ekstensi =  array('png','jpg','jpeg','gif');
	$filename = $_FILES['foto']['name'];
	$ukuran = $_FILES['foto']['size'];
    $tempdir = "../img/event/tmp/"; 
    if (!file_exists($tempdir))
         mkdir($tempdir,0755);
	
	$ext = pathinfo($filename, PATHINFO_EXTENSION);
	if(!in_array($ext,$ekstensi) ) {
	header("location:../../pages/admin/article.php?gagal_ekstensi");
		}else{
			if($ukuran < 10440700){		
			
				$xx = $rand.'_'.$filename;
				move_uploaded_file($_FILES['foto']['tmp_name'], '../../img/event/'.$rand.'_'.$filename);

                $target_path = $tempdir . basename($_FILES['foto']['name']);
                $source_img = $_FILES['foto']['name'];
                $destination_img = $target_path;
                compress($source_img, $destination_img, 30);

				$db->input($_POST['nama'],$_POST['peserta'],$xx,$_POST['tanggal']);
				header("location:../../pages/oprator/event.php?alert=berhasil");
			}else{
				header("location:../../pages/oprator/event.php?alert=gagal_ukuran");
			}
}

}


elseif ($aksi=="hapus") {
	$db->hapus($_GET['id']);
	header("location:../pages/oprator/event.php?alert=berhasil");
	# code...
}
elseif ($aksi=="update") {
		$db->update($_POST['id'],
		 $_POST['nama'],$_POST['tanggal'],$_POST['peserta']);
		header("location:../pages/oprator/event.php?alert=berhasil");
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
	header("location:../../pages/admin/article.php?gagal_ekstensi");
		}else{
			if($ukuran < 10440700){		
				$xx = $rand.'_'.$filename;
				unlink('../../img/event/'.$lama);
				move_uploaded_file($_FILES['foto']['tmp_name'], '../../img/event/'.$rand.'_'.$filename);

                $target_path = $tempdir . basename($_FILES['foto']['name']);
                $source_img = $_FILES['foto']['name'];
                $destination_img = $target_path;
                compress($source_img, $destination_img, 30);

				$db->updatefoto($_POST['id'],$xx);
				header("location:../../pages/oprator/event.php?alert=berhasil");
		}else{
				header("location:../../pages/oprator/event.php?alert=gagal_ukuran");
			}
}
	# code...
}




 ?>


