<?php 
// koneksi database
include '../conn/koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

$qr=mysqli_query($koneksi,"select * FROM article WHERE article='$id'");
$r=mysqli_fetch_array($qr);
$tempat_foto = '../img/article'.$r['foto_user'];
unlink("$tempat_foto");
//echo $tempat_foto
 


// menghapus data dari database

mysqli_query($koneksi,"delete from article where id_article='$id'");
// mengalihkan halaman kembali ke index.php
header("location:../pages/admin/article.php");

?>