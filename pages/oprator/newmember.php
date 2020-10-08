<style>

th, td {
  padding: 10px;
  
}
</style>
					<div class="modal fade" id="myModal<?php echo $d['id_member']; ?>" role="dialog">
				    <div class="modal-dialog modal-lg">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title"> Data member </h4>
				        </div>
				        <div class="modal-body">
				        	<div class="row">
				        		<input type="hidden" name="id" value="<?php echo $d['id_member']; ?>">
				        		<div class="col-sm-8 text-left"><p>Nama : <?php echo $d['nama']; ?></p>
				        			<br><p>No ID : <?php echo $d['no_id']; ?></p>
				        			<br><p>Jenis Kelamin : <?php echo $d['jk']; ?></p>
				        			<br><p>NPA : <?php echo $d['npa']; ?></p>
				        			<br><p>TTL : <?php echo $d['ttl']; ?></p>
				        			<br><p>No TLP : <?php echo $d['tlp']; ?></p>
				        			<br><p>Alamat : <?php echo $d['alamat']; ?></p>
				        			<br><p>Email : <?php echo $d['email']; ?></p>
				        			<br><a href=""><p>Instagram : <?php echo $d['ig']; ?></p></a>
				        			<br><a href=""><p>Facebook : <?php echo $d['fb']; ?></p></a>
				        			<br><p>Domisili : <?php echo $d['domisili']; ?></p>
				        			<br><p>Keanggotaan : <?php echo $d['status_keanggotaan']; ?></p>
				        			<br><p>TGL Daftar : <?php echo $d['tgl_daftar']; ?></p>
				        			<br><p>Keterangan : <?php echo $d['keterangan']; ?></p>
				        			<br>
				        			<h3>Data Clinic</h3>
				        			<br><p>Nama Clinic : <?php echo $d['nama_clinic']; ?></p>
				        			<br><p>Alamat Clinic : <?php echo $d['alamat_clinic']; ?></p>
				        			<br><p>No Clinic : <?php echo $d['no_tlp_clinic']; ?></p>
				        		</div>
				        			<div class="col-sm-3 aling-self-right" >
				        			 <img src="../../img/member/<?php echo $d['foto_member'] ?>"  width="200" height="200" class="img-thumbnail">
				        			 <a href="updateimgmember.php?id=<?php echo $d['id_member']; ?>" <button class="btn"  ><i class="fa fa-folder"></i>Ubah</button> </a>
				        			</div>
				        </div>
				          <h1>Score : <?php echo $d['score']; ?></p><a href="score.php?id=<?php echo $d['id_member']; ?>" <button class="btn"  ><i class="fa fa-folder"></i>Ubah</button> </h1>

				        </div>
				        <div class="modal-footer">
				        	<a href="upm.php?id=<?php echo $d['id_member']; ?>" <button class="btn"  ><i class="fa fa-folder"></i>Ubah</button> </a>
				        	<a href="addm.php" <button class="btn"  ><i class="fa fa-bars"></i></button> </a>
				          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
				      </div>
				    </div>
				  </div>
				</div>