
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
<script src="wysihtml/dist/wysihtml-toolbar.min.js"></script>
<script src="wysihtml/parser_rules/advanced_and_extended.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="../../vendor/datatables/datatables.css">
 <script type="text/javascript" charset="utf8" src="../../vendor/datatables/datatables.js"></script>

<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['role']==""){
		header("location:../login.php?pesan=gagallogin");
	}

	?>
	
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand text-uppercase active" href="#">Dashboard <?php echo $_SESSION['role']; ?> </a>
    </div>
    <ul class="nav navbar-nav">
       <!---<li class=""><a href="homedash.php">Home</a></li>-->
      <!---<li class=""><a href="admin.php">Admin</a></li>-->
       <li class=""><a href="event.php">Event</a></li>
           <!--- <li class=""><a href="supported.php">Suported By</a></li>-->
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="member.php">Member
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="member.php">Data Member</a></li>
           <li><a href="pengurus.php">Data Pengurus</a></li>
           <li><a href="jabatan.php">Data Jabatan</a></li>
           <li><a href="special_member.php">Data Special Member</a></li>
          <!---<li><a href="clinic.php">Data Iuran</a></li>-->
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="article.php">Article
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="article.php">Data Article</a></li>
          <li><a href="category.php">Data Category</a></li>

        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="" img><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['username']; ?> </a></li>
      <li><a href="../../conn/logout.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
    </ul>
  </div>
</nav>
  <?php 
    if(isset($_GET['alert'])){
      if($_GET['alert']=='gagal_ekstensi'){
        ?>
        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
          Ekstensi Tidak Diperbolehkan
        </div>                
        <?php
      }elseif($_GET['alert']=="gagal_ukuran"){
        ?>
        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i> Peringatan !</h4>
          Ukuran File terlalu Besar
        </div>                
        <?php
      }elseif($_GET['alert']=="berhasil"){
        ?>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-check"></i> Success</h4>
          Berhasil Disimpan
        </div>                
        <?php
      }
    }
    ?>


