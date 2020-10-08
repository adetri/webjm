<?php 
$koneksi = mysqli_connect("localhost","ikgeiid_dbmem","8u7y6t5r4e","ikgeiid_mem_full");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>