
<!DOCTYPE html>

<html lang="en" class="no-js">
<?php include 'header.php'; ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>24 News — Free Website Template, Free HTML5 Template by FreeHTML5.co</title>
    <link href="asstjurnal/css/media_query.css" rel="stylesheet" type="text/css"/>
    <link href="asstjurnal/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="asstjurnal/css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="asstjurnal/css/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="asstjurnal/css/owl.theme.default.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap CSS -->
    <link href="asstjurnal/css/style_1.css" rel="stylesheet" type="text/css"/>
    <!-- Modernizr JS -->
    <script src="asstjurnal/js/modernizr-3.5.0.min.js"></script>
</head>
<body>
<div class="container-fluid pb-4 pt-4 paddding mt-5">
    <div class="container paddding mt-5">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div id="jurnal"class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
                </div>
                        <?php include '../conn/koneksi.php';
                
              $batas = 5;
                $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;  
         
                $previous = $halaman - 1;
                $next = $halaman + 1;
                
                $data = mysqli_query($koneksi,"select * from article");
                $jumlah_data = mysqli_num_rows($data);
                $total_halaman = ceil($jumlah_data / $batas);
         
                
                  $data1 = mysqli_query($koneksi,"select * from article left join member on article.id_member=member.id_member limit $halaman_awal, $batas");   

                $nomor = $halaman_awal+1;
                while($d = mysqli_fetch_array($data1)){
               

$kalimat=$d['deskripsi'];
$jumlahkarakter=350;
$cetak = substr($kalimat, 0, $jumlahkarakter);



                 ?>



                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="../img/article/<?php echo $d['foto_article'] ?>" alt=""/></div>
                            <div></div>
                        </div> 
                    </div>
                    <div class="col-md-7">
                        <a href="single.php?id=<?php echo $d['id_article']; ?>" class="fh5co_magna py-2"> <?php echo $d['judul_article'];?> </a> <br> <a href="#" class="fh5co_mini_time py-3"><?php echo $d['nama'];?> <br><?php echo $d['tanggal'];?></a>
                        <div class="fh5co_consectetur">


                             
                  
                        <?php  echo $cetak;?>...
                


                        </div>
                    </div>


                </div>
                  <?php  }  ?>


                       <nav class="mt-4">
                  <ul class="pagination justify-content-center">
                    <li class="page-item">
                      <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
                    </li>
                    <?php 
                    for($x=1;$x<=$total_halaman;$x++){
                      ?> 
                      <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                      <?php
                    }
                    ?>        
                    <li class="page-item">
                      <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
                    </li>
                  </ul>
                </nav>   
            </div>


            <div class="col-md-4 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                    <?php 
            $no = 0;
            $data = mysqli_query($koneksi,"select * from category");
            while($d = mysqli_fetch_array($data)){
            $no++;  
                ?>
                    <a href="#" class="fh5co_tagg"><?php echo $d['category'];?></a>
                      <?php    
            }
            ?>
                </div>
                
                </div>
            </div>
        </div>
        
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="asstjurnal/js/owl.carousel.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="asstjurnal/js/jquery.waypoints.min.js"></script>
<!-- Main -->
<script src="asstjurnal/js/main.js"></script>
<?php include 'footer.php'; ?>
</body>
</html>