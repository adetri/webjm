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

	function cat()
	{
	$data=mysqli_query($this->koneksi,"SELECT * from category");
	while ($d=mysqli_fetch_array($data)) {
	$hasil[]=$d;		# code...
	}
	return $hasil;
	}

	public function mem()
	{
		$data=mysqli_query($this->koneksi,"SELECT * from member");
		while ($d=mysqli_fetch_array($data)) {
		$hasil[]=$d;
		}
		return $hasil;
	}

	public function us()
	{
		$data=mysqli_query($this->koneksi,"SELECT * from user");
		while ($d=mysqli_fetch_array($data)) {
		$hasil[]=$d;			# code...
		}
		return $hasil;
	}



	function show(){
			
 				
					$data_pegawai = mysqli_query($this->koneksi,"SELECT * FROM supported");
				
				
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

	function input($nama,$xx)
	{
	mysqli_query($this->koneksi,"INSERT into supported values('','$nama','$xx')");
	}
	function hapus($id)
	{
		mysqli_query($this->koneksi,"DELETE from supported where id_brand='$id'");
	}
	
	function edit($id)
	{
		$data= mysqli_query($this->koneksi,"SELECT * from supported where id_brand='$id'");
		while ($d= mysqli_fetch_array($data)) {
			$hasil[]= $d;
			# code...
		}
		return $hasil;
	}
	public function update($id,$nama)
	{
		mysqli_query($this->koneksi,"UPDATE supported set 
			nama_brand='$nama'
			     where id_brand='$id'");
	}

	public function updatefoto($id,$xx)
	{
	mysqli_query($this->koneksi,"UPDATE supported  set img_bran='$xx' where id_brand='$id'");
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