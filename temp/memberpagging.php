
<?php 
include '../conn/koneksi.php';
$batas = 14;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
 
				$previous = $halaman - 1;
				$next = $halaman + 1;
				
				$data = mysqli_query($koneksi,"select * from member");
				$jumlah_data = mysqli_num_rows($data);
				$total_halaman = ceil($jumlah_data / $batas);
 
				$data_pegawai = mysqli_query($koneksi,"select * from member ORDER BY score desc limit $halaman_awal, $batas");
				while($d = mysqli_fetch_array($data_pegawai)){


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

    </div>
          <nav class="mt-4">
			<ul class="pagination justify-content-center">
				<li class="page-item">
					<a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous#doctors1'"; } ?>>Previous</a>
				</li>
						
				<li class="page-item">
					<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next#doctors1'"; } ?>>Next</a>
				</li>
			</ul>
		</nav>