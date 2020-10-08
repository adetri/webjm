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
			
					$data_pegawai = mysqli_query($this->koneksi,"SELECT * FROM pengurus left join jabatan on jabatan.id_jabatan=pengurus.id_jabatan");
					
				
				while($d = mysqli_fetch_array($data_pegawai)){
					$hasil[] = $d;
					
		}
		return $hasil;
	}
	
	function showjabatan(){
			
					$data_pegawai = mysqli_query($this->koneksi,"SELECT * FROM jabatan");
					
				
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

	function input($nama,$jk,$alamat,$tlp,$mail,$ig,$fb,$domisili,$jabatan,$xx)
	{
	mysqli_query($this->koneksi,"INSERT into pengurus values('','$nama','$jk','$alamat','$tlp','$mail','$ig','$fb','$domisili','$jabatan','$xx')");
	}

	function hapus($id)
	{
		mysqli_query($this->koneksi,"DELETE from pengurus where id_pengurus='$id'");
	}
	
	function edit($id)
	{
		$data= mysqli_query($this->koneksi,"SELECT * from pengurus pengurus left join jabatan on jabatan.id_jabatan=pengurus.id_jabatan where id_pengurus='$id'");
		while ($d= mysqli_fetch_array($data)) {
			$hasil[]= $d;
			# code...
		}
		return $hasil;
	}
	public function update($id,$nama,$jk,$alamat,$tlp,$mail,$ig,$fb,$domisili,$jabatan)
	{
		mysqli_query($this->koneksi,"UPDATE pengurus set nama_pengurus='$nama',
	 jk='$jk',
	  alamat='$alamat',
	   tlp='$tlp',
	    email='$mail',
	    ig='$ig',
	     fb='$fb',
	      domisili='$domisili',
	       id_jabatan='$jabatan'
	               where id_pengurus='$id'");
	}

	public function updatefoto($id,$xx)
	{
	mysqli_query($this->koneksi,"UPDATE pengurus  set foto='$xx' where id_pengurus='$id'");
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