<style>

th, td {
  padding: 10px;
  
}
</style>
					<div class="modal fade" id="myModal<?php echo $d['id_pengurus']; ?>" role="dialog">
				    <div class="modal-dialog modal-lg">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title"> Data Pengurus </h4>
				        </div>
				        <div class="modal-body">
				        	<div class="row">
				        		<input type="hidden" name="id" value="<?php echo $d['id_pengurus']; ?>">
				        		<div class="col-sm-8 text-left"><p>Nama : <?php echo $d['nama_pengurus']; ?></p>
				        			<br><p>Alamat : <?php echo $d['alamat']; ?></p>
				        			<br><p>Jenis Kelamin : <?php echo $d['jk']; ?></p>
				        				<br><p>Jabatan : <?php echo $d['jabatan']; ?></p>
				        			<br><p>No TLP : <?php echo $d['tlp']; ?></p>
				        	
				        			<br><p>Email : <?php echo $d['email']; ?></p>
				        			<br><p>Instagram : <a href="<?php echo $d['ig']; ?>"><?php echo $d['ig']; ?></a></p>
				        			<br><p>Facebook : <a href="<?php echo $d['ig']; ?>"><?php echo $d['fb']; ?></a></p>
				        			<br><p>Domisili : <?php echo $d['domisili']; ?></p>
				        		
				        	
				        		</div>
				        			<div class="col-sm-3 aling-self-right" >
				        			 <img src="../../img/pengurus/<?php echo $d['foto'] ?>"  width="200" height="200" class="img-thumbnail">
				        			 <a href="update_img_pengurus.php?id=<?php echo $d['id_pengurus']; ?>" <button class="btn"  ><i class="fa fa-folder"></i>Ubah</button> </a>
				        			</div>
				        </div>
				          
				        </div>
				        <div class="modal-footer">
				        	<a href="update_pengurus.php?id=<?php echo $d['id_pengurus']; ?>" <button class="btn"  ><i class="fa fa-folder"></i>Ubah</button> </a>
				        	
				          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
				      </div>
				    </div>
				  </div>
				</div>