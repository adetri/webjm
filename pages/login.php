<!DOCTYPE html>
<html>
<head>
	<title>Login Web Sekretariat IKGEI</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1> Login <br/> Sekretariat <br/> Web IKGEI</h1>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
		if($_GET['pesan']=="failoprator"){
			echo "<div class='alert'>Anda harus login sebagai Oprator untuk mengakses halam tersebut !</div>";
		}
		if($_GET['pesan']=="failadmin"){
			echo "<div class='alert'>Anda harus login sebagai Admin untuk mengakses halam tersebut !</div>";
		}
		if($_GET['pesan']=="gagallogin"){
			echo "<div class='alert'>Anda harus login terlebih dahalu</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Masukkan Username dan Password</p>
 
		<form action="../conn/cek_login.php" method="post">
			<input type="text" name="username" class="form_login" placeholder="Masukkan Username" required="required">
			<input type="password" name="password" class="form_login" placeholder="Masukkan Password" required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
			<!--	<a class="link" href="https://www.malasngoding.com">kembali</a> -->
			</center>
		</form>
		
	</div>
 
 
</body>
</html>
