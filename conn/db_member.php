<?php 

class database{
	public $rows;
	var $host = "localhost";
	var $username = "ikgeiid_dbmem";
	var $password = "8u7y6t5r4e";
	var $database = "ikgeiid_mem_full";
	var $koneksi = "";


	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}


	function show(){
			
					$data_pegawai = mysqli_query($this->koneksi,"SELECT * FROM member");
				
				
				while($d = mysqli_fetch_array($data_pegawai)){
					$hasil[] = $d;
					
		}
		return $hasil;
	}

	function cari($keyword)
	{
		$data= mysqli_query($this->koneksi,"SELECT * FROM article
					 left join user on article.id_user=user.id_user
					  left join category on article.id_category=category.id_category
					  left join member on member.id_member=article.id_member where judul_article 
					 like '%".$keyword."%'");
		while($d=mysqli_fetch_array($data)){
			$hasil[]=$d;
		}
		return $hasil;
	}

	function input($no_id,$nama,$npa,$ttl,$jk,$alamat,$tlp,$mail,$ig,$fb,$domisili,$anggota,$tgldaftar,$ket,$nama_clinic,$alamat_clinic,$no_tlp_clinic,$xx,$score)
	{
	mysqli_query($this->koneksi,"INSERT into member values('','$no_id',
		'$nama',
		'$npa',
		'$ttl',
		'$jk',
		'$alamat',
		'$tlp',
		'$mail',
		'$ig',
		'$fb',
		'$domisili',
		'$anggota',
		'$tgldaftar',
		'$ket',
		'$nama_clinic',
		'$alamat_clinic',
		'$no_tlp_clinic',
		'$xx',
		'$score')");
	}

	function hapus($id)
	{
		mysqli_query($this->koneksi,"DELETE from member where id_member='$id'");
	}
	
	function edit($id)
	{
		$data= mysqli_query($this->koneksi,"SELECT * from member  where id_member='$id'");
		while ($d= mysqli_fetch_array($data)) {
			$hasil[]= $d;
			# code...
		}
		return $hasil;
	}
	public function update($id,$no_id,$nama,$npa,$ttl,$jk,$alamat,$tlp,$mail,$ig,$fb,$domisili,$anggota,$tgldaftar,$ket,$nama_clinic,$alamat_clinic,$no_tlp_clinic)
	{
		mysqli_query($this->koneksi,"UPDATE member set no_id='$no_id',
	 nama='$nama',
	  npa='$npa',
	   ttl='$ttl',
	    jk='$jk',
	    alamat='$alamat',
	     tlp='$tlp',
	      email='$mail',
	       ig='$ig',
	        fb='$fb',
	         domisili='$domisili',
	          status_keanggotaan='$anggota',
	           keterangan='$ket',
	            nama_clinic='$nama_clinic',
	             alamat_clinic='$alamat_clinic',
	              no_tlp_clinic='$no_tlp_clinic'
	               where id_member='$id'");
	}

	public function updatefoto($id,$xx)
	{
	mysqli_query($this->koneksi,"UPDATE member  set foto_member='$xx' where id_member='$id'");
	}

	public function pagging()
	{
		function selectTable($col='*', $table){
			
 				
					$data_pegawai = mysqli_query($this->koneksi,"SELECT $col FROM $table");
				
				
				while($d = mysqli_fetch_array($data_pegawai)){
					$hasil[] = $d;
					
		}
		return $hasil;
	}
		
	}

} 

?>