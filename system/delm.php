<?php 
// koneksi database
include '../conn/koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

$qr=mysqli_query($koneksi,"select * FROM member WHERE id_member='$id'");
$r=mysqli_fetch_array($qr);
$tempat_foto = '../img/member'.$r['foto_user'];
unlink("$tempat_foto");
//echo $tempat_foto
 


// menghapus data dari database

mysqli_query($koneksi,"delete from member where id_member='$id'");
// mengalihkan halaman kembali ke index.php
header("location:../pages/admin/member.php");

?>