<style>

th, td {
  padding: 10px;
  
}
</style>
					<div class="modal fade" id="myModal<?php echo $d['no_id']; ?>" role="dialog">
				    <div class="modal-dialog modal-lg">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title"> Data Special member </h4>
				        </div>
				        <div class="modal-body">
				        	<div class="row">
				        		<input type="hidden" name="id" value="<?php echo $d['no_id']; ?>">
				        		<div class="col-sm-8 text-left"><p>Nama : <?php echo $d['nama']; ?></p>
				        			<br><p>NPA : <?php echo $d['npa']; ?></p>
				        			<br><p>TTL : <?php echo $d['ttl']; ?></p>
				        			<br><p>Jenis Kelamin : <?php echo $d['jk']; ?></p>
				        			<br><p>Alamat : <?php echo $d['alamat']; ?></p>
				        			<br><p>No TLP : <?php echo $d['tlp']; ?></p>
				        			<br><p>Email : <?php echo $d['email']; ?></p>
				        			<br><a href=""><p>Instagram : <?php echo $d['ig']; ?></p></a>
				        			<br><a href=""><p>Facebook : <?php echo $d['fb']; ?></p></a>
				        			<br><p>Domisili : <?php echo $d['domisili']; ?></p>
				        			<br><p>Keanggotaan : <?php echo $d['status_keanggotaan']; ?></p>
				        			<br><p>jabatan : <?php echo $d['jabatan']; ?></p>
				        			<br><p>TGL Daftar : <?php echo $d['tgl_daftar']; ?></p>
				        			<br><p>Keterangan : <?php echo $d['keterangan']; ?></p>
				        			<br>
				        			<h3>Data Clinic</h3>
				        			<br><p>Nama Clinic : <?php echo $d['nama_clinic']; ?></p>
				        			<br><p>Alamat Clinic : <?php echo $d['alamat_clinic']; ?></p>
				        			<br><p>No Clinic : <?php echo $d['no_tlp_clinic']; ?></p>
				        		</div>
				        			<div class="col-sm-3 aling-self-right" >
				        			 <img src="../../img/special/<?php echo $d['foto_member'] ?>"  width="200" height="200" class="img-thumbnail">
				        			 <a href="update_img_special_member.php?id=<?php echo $d['no_id']; ?>" <button class="btn"  ><i class="fa fa-folder"></i>Ubah</button> </a>
				        			</div>
				        </div>
				        </div>
				        <div class="modal-footer">
				        	<a href="update_special_member.php?id=<?php echo $d['no_id']; ?>" <button class="btn"  ><i class="fa fa-folder"></i>Ubah</button> </a>
				          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
				      </div>
				    </div>
				  </div>
				</div>