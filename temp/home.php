<!-- End Header -->
<?php include 'header.php';
foreach ($tampil as $x ) {
  # code...

 ?>
 <title>Welcome to IKGEI</title>
  <section id="hero" style="background-image: url('../img/home/<?php echo $x['bg']; ?>');" class="d-flex align-items-center">
    <div class="container" >

      <h1><?php echo $x['judul']; ?></h1>
      
      <a href="https://api.whatsapp.com/send?phone=+<? echo $x['tlp']; ?>/*&amp;text=Halo,%20Saya%20mau%20tanya%20Mengenai%20IKGEI%0ANama%3A%0ANama%20Klinik%3A%0ANo.%20HP%20/%20Tlp%3A%0AAlamat%3A%0ADomisili%3A%0AEmail%3A%0AInstagram%3A%0AFacebook%3A" class="btn-get-started scrollto">Contact Us</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row " >
        <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" style="background-image: url('../img/home/<?php echo $x['main']; ?>');  background-position: center;">
            <a href="" class="venobox  mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes mt-5 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3><?php echo $x['nama_web']; ?></h3>
            <p><?php echo $x['deskripsi']; ?></p>


          </div>
        </div>

      </div>
    </section><!-- End About Section -->
<?php } ?>
    <!-- ======= Counts Section ======= -->

     
    <br>


    <section id="counts" class="counts">
      <div class="flex-container">

        <div class="row">

          <div class="mt-4">
            <div class="count-box">
              <i class="icofont-doctor-alt"></i>
              <span data-toggle="counter-up"><?php echo  $row_member?></span>

              <p>Members</p>
            </div>
          </div>

          <div class="ml-3 mt-4">
            <div class="count-box">
              <i class="icofont-award"></i>
              <span data-toggle="counter-up"><?php echo $row_event ?></span>
              <p>Event</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->




<?php include '../conn/db_home.php';
$db= new home();
$contri=$db->showdb_contributor();
$special=$db->showdb_special();
$member=$db->showdb_member();
$memberscore=$db->showdb_member_score();
$supported=$db->showdb_supported();
?>

<!-- ======= Contributors ======= -->
<section id="doctors" class="doctors">
      <div class="container-fluid">
        <div class="section-title">
          <h2>Contributors</h2>
        </div>
        <div class="row">
        <div class="slick-wrapper">
  <div id="slick4" class="">
    <?php foreach ($contri as $d)
    {

     ?>
      
  
    <div class="slide-item mt-3 ml-3"></h3>
        <div  class="member d-flex align-items-start">
          <div class="pic"><img src="../img/special/<?php echo $d['foto_member'] ?>" class="img-fluid"  alt=""></div>
              <div class="member-info">
                <h4><?php echo $d['nama']; ?></h4>
                <span><?php echo $d['nama_clinic']; ?></span>
                <p><?php echo $d['domisili']; ?></p>
                <div class="social">
                  <a href="https://facebook.com/<? echo $d['fb']; ?><?php echo $d['nama']; ?>"><i class="ri-facebook-fill"></i></a>
                  <a href="https://instagram.com/<? echo $d['ig']; ?>"><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div> 
        </div>
     <?php  }  ?>
  </div>
</div>
 </div>
  </div>
    </section>

<!-- ======= Special Member ======= -->
<section id="doctors" class="doctors">
      <div class="container-fluid">
        <div class="section-title">
          <h2>Special Member</h2>
        </div>
        <div class="row">
        <div class="slick-wrapper">
  <div id="slick5" class="">
    <?php foreach ($special as $d) {
      # code...
    
         ?>
    <div class="slide-item mt-3 mb-3"></h3>
        <div  class="member d-flex align-items-start">
          <div class="pic"><img src="../img/special/<?php echo $d['foto_member']; ?>" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?php echo $d['nama']; ?></h4>
              
                <div class="social">
                  <a href="https://facebook.com/<? echo $d['fb']; ?>"><i class="ri-facebook-fill"></i></a>
                  <a href="https://instagram.com/<? echo $d['ig']; ?>"><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div> 
        </div>
     <?php  }  ?>
  </div>
</div>
 </div>
  </div>
    </section>




    

<!-- ======= General member ======= -->
    <section id="doctors1" class="doctors1">
      <div class="container-fluid">

        <div class="section-title">
          <h2>Members</h2>
        </div>
        <div class="searchbox d-flex justify-content-center">
          <form action="./paging.php" method="get">
            <input class="text-center" type="text" placeholder="Name / City" name="cari" id="keyword">
            <div>
            </div>
        </form>
        </div>
        <div class="row" id="container">
          <?php include './memberpagging.php'; ?>
        </div>
      </div>
    </section><!-- End Doctors Section -->


   <script src="live.js"></script>
<br>
<br>
<br>
<br>
 <hr size="10px"> 

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="section-title">
          <h2>Supported By</h2>
          
        </div>
        <div class="owl-carousel  testimonials-carousel">

<?php foreach ($supported as $d) {
  # code...
 ?>
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="../img/supported/<?php echo $d['img_bran'] ?>" class="testimonial-img" alt="">
              
            </div>
          </div>
<?php } ?>
          

        </div>

      </div>
          <hr size="50px" >
    </section><!-- End Testimonials Section -->

    
  </main><!-- End #main -->




<?php include 'footer.php'; ?>
<!-- ======= Contact Section ======= -->
