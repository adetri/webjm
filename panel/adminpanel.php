<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
</head>
<body>
<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['role']==""){
		header("location:login.php?pesan=gagal");
	}

	?>
<!-- kode untuk menu -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><?php echo $_SESSION['role']; ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li  type="hidden" class="active"><a href="#">Home</a></li>
        <li><a href="adminpanel.php?p=data_admin">data admin</a></li>
		<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="adminpanel.php?p=upadmin">update</a></li>
          <li><a href="adminpanel.php?p=inputadmin">input admin</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
        <li><a href="adminpanel.php?p=data2">data 2</a></li>
		
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['username']; ?></a></li>
        <li><a href="../conn/logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- end kode untuk menu -->  

<!-- kode untuk konten -->
<div class="container">
   <?php
        $pages_dir = 'pages'; //pages merupakan nama folder
        if(!empty($_GET['p'])){ //kondisi apakan ada parameter p didalam url
        $pages = scandir($pages_dir, 0);
        unset($pages[0], $pages[1]);
                            
        $p = $_GET['p'];
        if(in_array($p.'.php', $pages)){
          include($pages_dir.'/'.$p.'.php');
        } else {
          echo "Halaman tidak ditemukan!";       
          }
        } else {
          include($pages_dir.'/home.php');
        }
    ?> 
</div>
<!-- end kode untuk konten -->
</body>
</html>