<!DOCTYPE html>
<html>
<head>
	<title>Halaman admin - www.malasngoding.com</title>
		<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
	<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['role']==""){
		header("location:login.php?pesan=gagal");
	}

	?>
		<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#"><?php echo $_SESSION['role']; ?></a>
		</div>
		<ul class="nav navbar-nav">
		  <li class="active"><a href="#">Home</a></li>
		  <li><a href="../admin/data_admin.php">Data User</a></li>
		  <li><a href="#">Page 2</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		  <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['username']; ?></a></li>
		  <li><a href="../conn/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
		</ul>
	  </div>
	</nav>
	
</body>
</html>