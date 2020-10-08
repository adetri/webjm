<!DOCTYPE html>

<html lang="en" class="no-js">
<head>
    <?php include 'header.php'; ?>
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
<body class="single">
    <?php
        
          
            $id = $_GET['id'];
            $data = mysqli_query($koneksi,"select * from article left join member on article.id_member=member.id_member where id_article='$id'");
            while($d = mysqli_fetch_array($data)){
                ?>

<div class="container-fluid fh5co_header_bg">
    <div class="container">
        <div class="row">
            
        </div>
    </div>
</div>
<div id="fh5co-title-box" style="background-image: url(../img/article/<?php echo $d['foto_article'] ?>); background-position: 50% 90.5px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="page-title">
        <img src="../img/member/<?php echo $d['foto_member'] ?>" alt="Free HTML5 by FreeHTMl5.co">
        <span><?php echo $d['tanggal'] ?></span>
        <h2><?php echo $d['judul_article'];?></h2>
    </div>
</div>
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla malesuada enim id enim congue
                    convallis. Praesent a cursus orci. Proin mauris eros, rhoncus in risus nec, vestibulum dignissim
                    diam. Duis dapibus, magna ac fringilla consectetur, tellus quam aliquam quam, molestie tincidunt
                    justo risus et nunc. Donec quis justo nec diam hendrerit facilisis placerat non magna. Class aptent
                    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                </p>
                <p>
                    Nulla tincidunt sit amet ligula interdum pulvinar. Sed nec volutpat enim. Praesent pretium
                    ullamcorper
                    quam, at rhoncus magna consectetur quis. Nulla condimentum, libero vel varius sodales, lacus urna
                    accumsan purus, at
                    mattis nisi nibh in lorem. Sed laoreet, ante vitae tincidunt auctor, sapien metus tincidunt ante,
                    quis aliquam lacus risus id quam.
                </p>
                <h3>Free HTML5 Templates</h3>
                <p>
                    Nam vehicula viverra quam, nec ornare ex convallis eget. Praesent pulvinar, justo at lacinia
                    elementum, dolor elit facilisis massa, vel feugiat elit massa et libero. Praesent hendrerit metus eu
                    elementum commodo. Morbi tempus mi a nulla scelerisque, vitae vulputate nisi commodo. Maecenas felis
                    urna, dictum quis mollis quis, mollis vel ligula. Nullam sodales sapien tellus, ornare tincidunt
                    dolor imperdiet at. Vestibulum convallis, felis quis condimentum finibus, justo lectus aliquam
                    libero, eu lacinia tellus leo eu orci.
                </p>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, modi!</li>
                    <li>Ea iure at, debitis culpa perspiciatis suscipit laudantium a, expedita.</li>
                    <li>Voluptate distinctio perspiciatis cum sed ipsum nisi accusantium a aut!</li>
                    <li>Sed vel quo dignissimos, quaerat totam officia, deserunt provident minus.</li>
                </ul>
                <p>
                    Maecenas consequat dictum aliquam. Praesent nec magna at ipsum facilisis dictum sit amet nec arcu.
                    Donec ac metus a elit rhoncus euismod et sit amet velit. Nunc quis lacus vel metus tincidunt
                    vulputate in et libero. Aliquam dolor lacus, facilisis ultrices rutrum in, blandit vitae nulla.
                    Nullam vestibulum, odio vitae aliquam aliquam, nibh dui iaculis augue, ut tristique nisi est in
                    tellus. Fusce volutpat ultricies venenatis. In a arcu in tellus tincidunt accumsan. Nulla pretium at
                    ex viverra vulputate. Cras mollis velit metus, non suscipit felis luctus sit amet. Ut vel leo vitae
                    magna blandit tempor in sit amet arcu. Donec dignissim mattis dui. Donec ultrices malesuada sapien,
                    ut fermentum nisi efficitur eu. Phasellus dui eros, posuere vel lacus vitae, venenatis feugiat
                    libero. Nunc sed nisi feugiat, consequat arcu id, vehicula augue. Donec viverra tincidunt nisi eget
                    ornare.
                </p>
                <?php } ?>
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4" ><h3>Last Post</h3></div>
                </div>
                <?php include '../conn/koneksi.php';
          $no=0;
      $data = mysqli_query($koneksi,"SELECT * FROM article order by id_article desc LIMIT 5;");
      while($d = mysqli_fetch_array($data)){
        $no++;
         ?>

                <div class="row pb-3">
                    <div class="col-5 align-self-center">
                        <a href="single.php?id=<?php echo $d['id_article']; ?>"><img src="../img/article/<?php echo $d['foto_article'] ?>" alt="img" class="fh5co_most_trading"/></a>
                    </div>
                    <div class="col-7 paddding">
                        <div class="most_fh5co_treding_font"><a href="single.php?id=<?php echo $d['id_article']; ?>"><?php echo $d['judul_article']; ?></div></a>
                        <div class="most_fh5co_treding_font_123"><?php echo $d['tanggal']; ?></div>
                    </div>
                </div>
                         <?php } ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

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
<!-- Parallax -->
<script src="asstjurnal/js/jquery.stellar.min.js"></script>
<!-- Main -->
<script src="asstjurnal/js/main.js"></script>
<script>if (!navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)){$(window).stellar();}</script>

</body>
</html>