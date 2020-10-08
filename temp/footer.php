<?php include '../conn/koneksi.php'; 
$data=mysqli_query($koneksi,"SELECT * From home");
while ($d=mysqli_fetch_array($data)) {
   # code...
  ?>
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
         
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="<?php echo $d['maps']; ?>" 0frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location</h4>
                <p><?php echo $d['alamat']; ?></p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email</h4>
                <p><a href="mailto:<? echo $d['mail']; ?>"><? echo $d['mail']; ?></p>
              </div>

              <div class="phone">
                <i class="icofont-brand-whatsapp"></i>
                <h4>Call Us</h4>
                <p>+<a href="https://api.whatsapp.com/send?phone=+<? echo $x['tlp']; ?>/*&amp;text=Halo,%20Saya%20mau%20tanya%20Mengenai%20IKGEI%0ANama%3A%0ANama%20Klinik%3A%0ANo.%20HP%20/%20Tlp%3A%0AAlamat%3A%0ADomisili%3A%0AEmail%3A%0AInstagram%3A%0AFacebook%3A"><? echo $d['tlp']; ?></a></p>
              </div>
               
            </div>
          </div>
          <div class="col-lg-8">
          		<script type="text/javascript" src="//rf.revolvermaps.com/0/0/6.js?i=5zhbf1pnznv&amp;m=0&amp;c=ff0000&amp;cr1=ffffff&amp;f=arial&amp;l=0" async="async"></script> 
          </div>
          

        </div>

      </div>
    </section><!-- End Contact Section -->
  <?php } ?>
  <!-- ======= Footer ======= -->
  <footer id="footer">

  
      
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Pratama Kreasi Solusi</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
         
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <!--<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
        <a href="https://facebook.com/<? echo $x['fb']; ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com/<? echo $x['ig']; ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-google"></i></a>
        <!--<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
      </div>
    </div>
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
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.js"></script>
  <script src="assets/vendor/slick/slick/slick.js"></script>
</script>
<script src="main.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
