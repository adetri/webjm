<?php 
include '../conn/koneksi.php';
$id = $_POST['id_member'];
$tahun = $_POST['tahun'];
$tgl = $_POST['tgl'];
$status = $_POST['status'];
$jumlah_dipilih = count($id);

for($x=0;$x<$jumlah_dipilih;$x++){
	mysqli_query($koneksi,"INSERT INTO iyuran values('','$id[$x]','$tahun','$tgl','$status')");
}

header("location:../pages/admin/member.php");

?>