<?php 

class about{
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


	function showevent()
{
	$data=mysqli_query($this->koneksi,"SELECT * from event");
	while ($d=mysqli_fetch_array($data)) {
		$hasil[]=$d;		# code...
	}return $hasil;
}

	function event(){
			
 				$nows=strtotime(date('Y-m-d'));
				$start=date('Y-m-d h:i:s',strtotime('+60 day',$nows));
				$end1=date('d  F  Y');
				$end=date('Y-m-d h:i:s');
					$data_pegawai = mysqli_query($this->koneksi,"SELECT * FROM event WHERE time between '$end' AND '$start' ORDER BY id_event ASC");
				
				
				while($d = mysqli_fetch_array($data_pegawai)){
					$hasil[] = $d;
					
		}
		return $hasil;
	}

		function show_sm(){
		$data = mysqli_query($this->koneksi,"select * from special_member where status_keanggotaan='Honorary'");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function show_pengurus(){
			
					$data_pegawai = mysqli_query($this->koneksi,"SELECT * FROM pengurus left join jabatan on jabatan.id_jabatan=pengurus.id_jabatan order by no_jabatan asc");
					
				
				while($d = mysqli_fetch_array($data_pegawai)){
				$hasil[] = $d;		
		}
		return $hasil;
	}

	function showdb_row(){
		$data = mysqli_query($this->koneksi,"select * from member");
		$row = mysqli_num_rows($data);
		echo $row;
		
	   
	
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

	function input($nama,$tanggal,$peserta)
	{
	mysqli_query($this->koneksi,"INSERT into event values('','$nama','$peserta','$tanggal')");
	}

	function hapus($id)
	{
		mysqli_query($this->koneksi,"DELETE from event where id_event='$id'");
	}
	
	function edit($id)
	{
		$data= mysqli_query($this->koneksi,"SELECT * from event  where id_event ='$id'");
		while ($d= mysqli_fetch_array($data)) {
			$hasil[]= $d;
			# code...
		}
		return $hasil;
	}
	public function update($id,$nama,$tanggal,$peserta)
	{
		mysqli_query($this->koneksi,"UPDATE event set nama_event='$nama', time='$tanggal', peserta='$peserta'
	               where id_event='$id'");
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