<?php 
// koneksi database
include '../conn/koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

$qr=mysqli_query($koneksi,"select * FROM user WHERE id_user='$id'");
$r=mysqli_fetch_array($qr);
$tempat_foto = '../img/'.$r['foto_user'];
unlink("$tempat_foto");
//echo $tempat_foto
 


// menghapus data dari database

mysqli_query($koneksi,"delete from user where id_user='$id'");
// mengalihkan halaman kembali ke index.php
header("location:../pages/admin/admin.php");

?>