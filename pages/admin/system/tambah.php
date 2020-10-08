<?php 
include '../conn/koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$role = $_POST['role'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$folder = '../img/';
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
#$width_size = 600;


if(!in_array($ext,$ekstensi) ) {
	header("location:../pages/admin/nav.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], '$folder'.$rand.'_'.$filename);
        #$resize_image = $folder . "resize_" . uniqid(rand()) . "$ekstensi";
        #list( $width, $height ) = getimagesize($filesave);
        #$k = $width / $width_size;
        #$newwidth = $width / $k;
        #$newheight = $height / $k;
        #$thumb = imagecreatetruecolor($newwidth, $newheight);
        #$source = imagecreatefromjpeg($filesave);
        #imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
        #imagejpeg($thumb, $resize_image);
        #imagedestroy($thumb);
        #imagedestroy($source);


		mysqli_query($koneksi, "INSERT INTO user VALUES(NULL,'$username','$password','$role','$xx')");
		header("location:../pages/admin/nav.php?alert=berhasil");
	}else{
		header("location:../pages/admin/nav.php?alert=gagal_ukuran");
	}
}
