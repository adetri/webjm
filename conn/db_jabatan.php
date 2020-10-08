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
			
 				
					$data_pegawai = mysqli_query($this->koneksi,"SELECT * FROM jabatan order by no_jabatan asc
					 ");
				
				
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

	function input($jabatan,$nojabatan)
	{
	mysqli_query($this->koneksi,"INSERT into jabatan values('','$jabatan','$nojabatan')");
	}
	function hapus($id)
	{
		mysqli_query($this->koneksi,"DELETE from jabatan where id_jabatan='$id'");
	}
	
	function edit($id)
	{
		$data= mysqli_query($this->koneksi,"SELECT * from jabatan where id_jabatan='$id'");
		while ($d= mysqli_fetch_array($data)) {
			$hasil[]= $d;
			# code...
		}
		return $hasil;
	}
	public function update($id,$jabatan,$nojabatan)
	{
		mysqli_query($this->koneksi,"UPDATE jabatan set 
			nama_jabatan='$jabatan',
			no_jabatan='$nojabatan'
			     where id_jabatan='$id'");
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