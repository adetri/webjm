<?php include 'header.php'; ?>
<body>  
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
        </br>
        </br>
        </br>
          <h2>Doctors</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <?php include '../conn/koneksi.php';
          $no=0;
      $data = mysqli_query($koneksi,"SELECT * FROM member");
      while($d = mysqli_fetch_array($data)){
        $no++;
         ?>

          
          <div class="col-lg-3 " >
            <div class="member d-flex align-items-start flex-column ">
              <div class="pic"><img src="assets/img/doctors/doctors-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <div class="text">
                <h4 class=" text-center mt-2"><?php echo $d['nama'];?></h4></div>
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
    </section>
</body>
<?php include 'footer.php'; ?>