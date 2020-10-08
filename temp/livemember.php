<?php

      include '../conn/koneksi.php';
      $keyword = $_GET["keyword"];
      $batas = 14;
      $data = mysqli_query($koneksi,"SELECT * FROM member where nama 
           like '%".$keyword."%' or domisili like '%".$keyword."%' limit $batas");
     foreach ($data as $d) {
       # code...
     
        ?>



          
           <div class="mt-4 ml-3" >
            <div class="member1">
              <div class="pic"><img src="../img/member/<? echo $d['foto_member'];?>"    class="img-fluid" alt="" ></div>
              <div class="member-info1">
                <div class="text">
                
                <h4 class="mt-2 d-flex"><? echo $d['nama'];?></h4>
                <div><p><? echo $d['domisili'];?></p></div>
              
                  </div><br>
                <div class="social">
                 
                  <a href="https://facebook.com/<?php echo $d['fb']; ?>"><i class="ri-facebook-fill"></i></a>
                  <a href="https://instagram.com/<?php echo $d['ig']; ?>"><i class="ri-instagram-fill"></i></a>
                  			
                </div>
              </div>
            </div>




          </div>
          <?php  }  ?>