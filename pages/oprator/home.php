<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medilab Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab - v2.0.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
 <?php include '../../conn/koneksi.php';
			
			$data = mysqli_query($koneksi,"select * from home where id='1'");
			while($home = mysqli_fetch_array($data)){
				?>
<body>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com"><?php echo $home['mail']; ?></a>
        <i class="icofont-phone"></i> +62 0000 000 000 
        <i class="icofont-google-map"></i> Jl.xxxx
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">IKGEI</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#doctors1">About</a></li>
          <li><a href="#services">Contact</a></li>
          <li><a href="">Event</a></li>
          <li><a href="jurnal.php">Jurnal</a></li>
          

        </ul>
      </nav><!-- .nav-menu -->

      <!--<a href="#appointment" class="appointment-btn scrollto">Make an Appointment</a> -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to IKGEI</h1>
      
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row mt-5" >
          <div class="col-xl-5 col-lg-6 mt-5 video-box d-flex justify-content-center align-items-stretch">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes mt-5 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>IKGEI Definition</h3>
            <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Dine Pad</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="flex-container">

        <div class="row">

          <div class="mt-4">
            <div class="count-box">
              <i class="icofont-doctor-alt"></i>
              <span data-toggle="counter-up">85</span>
              <p>Members</p>
            </div>
          </div>

          <div class="ml-3 mt-4">
            <div class="count-box">
              <i class="icofont-award"></i>
              <span data-toggle="counter-up">150</span>
              <p>Jurnal</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->


    <!-- ======= Honorary member ======= -->
    <section id="doctors" class="doctors2">
      <div class="container">

        <div class="section-title">
          <h2>Honorary</h2>
        </div>

        <div class="row">
              <?php include '../conn/koneksi.php';
          $no=0;
      $data = mysqli_query($koneksi,"SELECT * FROM member where status_keanggotaan = 'Honorary Member';");
      while($d = mysqli_fetch_array($data)){
        $no++;
         ?>
          <div class="mt-4 ml-3">
            <div class="member2 d-flex align-items-start">
              <div class="member-info">
                <h4><?php echo $d['nama']; ?></h4>
                <span>Nama Clinic</span>
                <p>Domisili</p>
                <div class="social">
                  
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                 
                </div>
              </div>
            </div>
          </div>
<?php  }  ?>
          

        </div>

      </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Diplomate Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Diplomate</h2>
          
        </div>

        <div class="row">
            <?php include '../conn/koneksi.php';
          $no=0;
      $data = mysqli_query($koneksi,"SELECT * FROM member where status_keanggotaan = 'Diplomate';");
      while($d = mysqli_fetch_array($data)){
        $no++;
         ?>
          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?php echo $d['nama']; ?></h4>
                <span>Nama clinic</span>
                <p>doisili</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
<?php  }  ?>
    
        </div>

      </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Contributors ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Contributors</h2>
          
        </div>

        <div class="row">
          <?php include '../conn/koneksi.php';
          $no=0;
      $data = mysqli_query($koneksi,"SELECT * FROM member where status_keanggotaan = 'Contributors';");
      while($d = mysqli_fetch_array($data)){
        $no++;
         ?>
          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?php echo $d['nama']; ?></h4>
                <span>Nama CLinic</span>
                <p>Domisili</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
        <?php  }  ?>
          

        </div>

      </div>
    </section><!-- End Doctors Section -->

<!-- ======= General member ======= -->
    <section id="doctors1" class="doctors1">
      <div class="container">

        <div class="section-title">
          <h2>General member</h2>
        </div>
        <div class="searchbox d-flex justify-content-center">
    <form action="home.php#doctors1" method="get">
  <input type="text" placeholder="Cari Member" name="cari">
  <input type="submit" value="Cari">
  <div><?php 
if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

  </div>
</div>
</form>
        <div class="row">
          <?php include '../conn/koneksi.php';
        
      $batas = 30;
        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;  
 
        $previous = $halaman - 1;
        $next = $halaman + 1;
        
        $data = mysqli_query($koneksi,"select * from member where status_keanggotaan = 'General member'");
        $jumlah_data = mysqli_num_rows($data);
        $total_halaman = ceil($jumlah_data / $batas);
 
        
        if(isset($_GET['cari'])){
          $cari = $_GET['cari'];
          $data1 = mysqli_query($koneksi,"select * from member where status_keanggotaan = 'General member' and nama like '%".$cari."%' or domisili like '%".$cari."%' limit $halaman_awal, $batas");       
        }else{
          $data1 = mysqli_query($koneksi,"select * from member where status_keanggotaan = 'General member' limit $halaman_awal, $batas");   
        }

        $nomor = $halaman_awal+1;
        while($d = mysqli_fetch_array($data1)){

         ?>

          
          <div class="mt-4 ml-3 d-flex align-items-start " >
            <div class="member1 d-flex align-items-start">
              <div class="pic"><img src="../img/member/<?php echo $d['foto_member'];?>"    class="img-fluid" alt="" ></div>
              <div class="member-info1">
                <div class="text">
                <h4 class=" text-center mt-2"><?php echo $d['nama'];?></h4>
                <div><p><?php echo $d['domisili'];?></p></div>
                <div><p><?php echo $d['nama_clinic'];?></p></div>
                  </div><br>
                <div class=" social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>




          </div>
          <?php  }  ?>
          

        </div>
<nav class="mt-4">
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous#doctors1'"; } ?>>Previous</a>
        </li>
        <?php 
        for($x=1;$x<=$total_halaman;$x++){
          ?> 
          <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>#doctors1"><?php echo $x; ?></a></li>
          <?php
        }
        ?>        
        <li class="page-item">
          <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next#doctors1'"; } ?>>Next</a>
        </li>
      </ul>
    </nav>   
      </div>
    </section><!-- End Doctors Section -->


   

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="section-title">
          <h2>Supported By</h2>
          
        </div>
        <div class="owl-carousel  testimonials-carousel">

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            </div>
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
             
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    

    
  </main><!-- End #main -->

<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
         
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
  <!-- ======= Footer ======= -->
  <footer id="footer">

  
      
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Medilab</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>

       <?php
        }
        ?>   
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>