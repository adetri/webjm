<?php
include '../conn/db_event.php';
$dbevent= new fevent();
$show = $dbevent->event();
$showpast = $dbevent->eventpast();
$end1=date('d  F  Y');
include 'header.php';
date_default_timezone_set('Asia/Jakarta')

?>

   <title>Event</title>

 <br><br><br><br><br>


  <title>Event</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<br><br><br><br><br>
<div class="">
 <div class="section-title">
          <h2>Event</h2>
         
        </div>

  <ul class="nav nav-tabs mt-3 ml-3">
    <li class="active"><a data-toggle="tab" href="#home">Upcoming Event</a></li>
    <li><a data-toggle="tab" href="#menu1">Past Event</a></li>
    
  </ul>
 <div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="container ">

    <div class="row1s">
        <div class="">
            <?php foreach ($show as $d) {
             $tangal=$d['time'];
             $no=0;

             ?>
            <div class="event">
                <blockquote>
                <div class="img">  
                   <img id="myImg" class="img-model" src="../img/event/<?php echo $d['foto_event']; ?>" alt="" style="width:100%;max-width:300px">
                </div>
                <div class="desc">
                    <h3> <? echo $d['nama_event']; ?></h3>
                </div>
                <div class="date pull-right">
                    <div class="day"><?php echo date('d',strtotime($tangal)); ?></div>
                    <div class="month"><?php echo date('M',strtotime($tangal)); ?></div>
                    <div class="year"><?php echo date('H:i',strtotime($tangal)); ?></div>
                </div>
                </blockquote>
            </div>
       <?php } ?>
        </div>
    </div>
</div>
    </div>


<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>


  



    <div id="menu1" class="tab-pane fade">
       <div id="home" class="tab-pane fade in active">
      <div class="container ">
    <div class="row12">
        <div class="">
            <?php foreach ($showpast as $d) {
             $tangal=$d['time'];
             ?>
            <div class="event1">
            <!--<blockquote> -->
            <div class="img">
                <img id="myImg" class="img-model" src="../img/event/<?php echo $d['foto_event']; ?>" alt="" style="width:100%;max-width:300px">
            </div>
                <div class="date1 pull-right">
                    <div class="day"><?php echo date('d',strtotime($tangal)); ?></div>
                    <div class="month"><?php echo date('M',strtotime($tangal)); ?></div>
                    <div class="year"><?php echo date('Y',strtotime($tangal)); ?></div>
                </div>
                <div class="desc">
                    <h3><?php echo $d['nama_event']; ?></h3>
                
             <!--</blockquote>-->
             </div>
         </div>
       <?php } ?>
        </div>
    </div>
</div>
   

    </div>
  </div>
  	
   <div class="zxc">
  <div class="tombolevent">
  <a href="https://api.whatsapp.com/send?phone=<?php echo $x['tlp']; ?>/*&amp;text=Saya%20mau%20daftar%20Event%20IKGEI%20dengan%20Judul%20...%0ANama%20Lengkap%20%3A%20%0ANomor%20Anggota%20IKGEI%20%3A%0ANPA%20%3A%20%0ANama%20Klinik%20%3A%20%0ANo.%20HP%20%2F%20Tlp%20%3A%20%0AAlamat%20%3A%20%0ADomisili%20%3A%20%0AEmail%20%3A%20%0AInstagram%20%3A%20%0AFacebook%20%3A" class="btn-get-started scrollto">Daftar Event</a>
   </div>
   </div>
  <script src="assets/js/event.js"></script>

<?php include 'footer.php'; ?>
