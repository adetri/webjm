<?php
include 'header.php';
include '../conn/db_about.php';
include '../conn/koneksi.php';
$db= new about();
$show = $db->event();
$show_sm = $db->show_sm();
$show_p = $db->show_pengurus();
?>

	 <title>About</title>
<br><br><br><br><br><br>
<div class="container">     <? foreach ($tampil as $x) {?>
  <div class="section-title">
          <h2>PROFILE</h2>
          <?php echo $x['visimisi']; ?>        
          <p></p>
        </div>
      </div>
<?php } ?>
      
     

<div class="container mt-5">    
 <? foreach ($tampil as $x) {?>
<div class="section-title pt-4"> <h2>PENJABARAN CABANG ILMU KEDOKTERAN GIGI <br>DAN PENERAPANNYA DI INDONESIA</h2></div>
         <div class="section-title1">
               
          <p><?php echo $x['strucktur']; ?>   </p>
          <img src="../img/home/test1.jpg" class="img1" alt="" >
        </div>
      </div>
<?php } ?>
      

     <section id="doctors" class="doctors">
      <div class="container-fluid">
        <div class="section-title">
          <h2>Committee</h2>
        </div>
        <div class="row">
        <div class="slick-wrapper">
  <div id="slick2" class="">
    <?php foreach ($show_p as $d) {
      # code...
     ?>
    <div class="slide-item mt-3"></h3>
        <div  class="member d-flex align-items-start">
          <div class="pic"><img src="../img/pengurus/<?php echo $d['foto']; ?>" class="img-fluid" alt="">
          </div>
              <div class="member-info">
                <span> <h4><?php echo $d['nama_pengurus']; ?></h4></span>
              <p></p><?php echo $d['nama_jabatan']; ?></p>
             
                
              </div>
            </div> 
        </div>
     <?php  }  ?>
  </div>
</div>
 </div>
  </div>
    </section><!-- End Doctors Section -->

<!-- ======= Diplomate Section ======= -->
    <section id="doctors" class="doctors2">
      <div class="container-fluid">
        <div class="section-title">
          <h2>Honorary Members</h2>
        </div>
        <div class="row">
        <div class="slick-wrapper">
  <div id="slick3" class="">
    <? foreach ($show_sm as $d) {
      # code...
    
    ?>
    <div class="slide-item mt-4"></h3>
        <div  class="member2 d-flex align-items-start">
              <div class="member-info">
                <span><h4><? echo $d['nama']; ?></h4></span>
                
                <p><? echo $d['jabatan']; ?></p>
                
              </div>
            </div> 
        </div>
     <?php  }  ?>
  </div>
</div>
 </div>
  </div>
    </section>

<?php include 'footer.php'; ?>
