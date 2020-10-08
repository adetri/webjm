<!DOCTYPE html>
<html lang="en">

<head>
  <?php 
include '../conn/db.php'; 
include '../conn/koneksi.php'; 
$db= new header();
$tampil= $db->showdb();
$row_member=$db->showdb_row();
$row_event=$db->showdb_row_event();
  ?>
<title>IKGEI</title>
<?php 
 foreach ( $tampil as $x) {
  ?>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta name="IKGEI" content="IKGEI width=device-width, initial-scale=1.0">
  <meta name="ikgei" content="aesthetic">
  <meta content="" name="<?php echo $x['content']; ?>">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<link href="assets/vendor/slick/slick/slick.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v2.0.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">

        <i class="icofont-envelope"></i><a href="mailto:<? echo $x['mail']; ?>"> <? echo $x['mail']; ?></a>
        <i class="icofont-brand-whatsapp"></i> +<a href="https://api.whatsapp.com/send?phone=+<? echo $x['tlp']; ?>/*&amp;text=Halo,%20Saya%20mau%20tanya%20Mengenai%20IKGEI%0ANama%3A%0ANama%20Klinik%3A%0ANo.%20HP%20/%20Tlp%3A%0AAlamat%3A%0ADomisili%3A%0AEmail%3A%0AInstagram%3A%0AFacebook%3A**/"><? echo $x['tlp']; ?></a>
        <i class="icofont-google-map"></i> <?php echo $x['alamat']; ?>
      </div>
      <div class="social-links">
      		    
        <a href="https://facebook.com/<? echo $x['fb']; ?>" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://instagram.com/<? echo $x['ig']; ?> " class="instagram"><i class="icofont-instagram"></i></a>
        <a href="mailto:<? echo $x['mail']; ?>" class="email"><i class="icofont-envelope"></i></a>
   
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="home.php">
      
      <img src="../img/home/<?php echo $x['logo']; ?>">
       <img  src="../img/home/<?php echo $x['logo1']; ?>">
       <img  src="../img/home/<?php echo $x['logo2']; ?>">
       
       </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
<div id="google_translate_element" class="googletrans"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
      <!--<a href="#appointment" class="appointment-btn scrollto">Make an Appointment</a> -->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
   
          <li><a href="home.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="event.php">Event</a></li>
          <!--<li><a href="">Jurnal</a></li> -->
    


        </ul>
      </nav><!-- .nav-menu -->
 



    </div>
  <?php } ?>
  </header>
