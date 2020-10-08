<?php 

class home{
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


public function row()
{ $data=mysqli_query($this->koneksi,"SELECT * from member");
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

		function showdb(){
		$data = mysqli_query($this->koneksi,"select * from home");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function showdb_member(){
		$data = mysqli_query($this->koneksi,"select * from member");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	function showdb_member_score(){
		$data = mysqli_query($this->koneksi,"select * from member order by score desc");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function showdb_supported(){
		$data = mysqli_query($this->koneksi,"select * from supported");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function showdb_row(){
		$data = mysqli_query($this->koneksi,"select * from member");
		$row = mysqli_num_rows($data);
		
		return $row;
	}

	function showdb_row_event(){
		$data = mysqli_query($this->koneksi,"select * from event");
		$row = mysqli_num_rows($data);
		
		return $row;
	}

	function showdb_contributor(){
		$data = mysqli_query($this->koneksi,"select * from special_member where status_keanggotaan='Contributors'");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function showdb_special(){
		$data = mysqli_query($this->koneksi,"select * from special_member where status_keanggotaan='Special Member'");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}


	function cari($keyword)
	{
		$data= mysqli_query($this->koneksi,"SELECT * FROM member where nama_member 
					 like '%".$keyword."%'");
		while($d=mysqli_fetch_array($data)){
			$hasil[]=$d;
		}
		return $hasil;
	}

	
	
	function edit($id)
	{
		$data= mysqli_query($this->koneksi,"SELECT * from home  where id ='$id'");
		while ($d= mysqli_fetch_array($data)) {
			$hasil[]= $d;
			# code...
		}
		return $hasil;
	}
	public function updatetext($id,$nama,$tlp,$alamat,$ig,$fb,$deskripsi,$mail,$maps,$visimisi,$strucktur,$content,$judul)
	{
		mysqli_query($this->koneksi,"UPDATE home set  tlp=$tlp, alamat='$alamat',ig='$ig', fb='$fb', nama_web ='$nama',deskripsi ='$deskripsi', mail='$mail',maps ='$maps', visimisi='$visimisi',strucktur='$strucktur' ,content ='$content', judul='$judul' where id='$id'");
	}

	public function updatelogo($id,$xx)
	{
	mysqli_query($this->koneksi,"UPDATE home  set logo='$xx' where id='$id'");
	}
	
	public function updatelogo1($id,$xx)
	{
	mysqli_query($this->koneksi,"UPDATE home  set logo1='$xx' where id='$id'");
	}

	public function updatelogo2($id,$xx)
	{
	mysqli_query($this->koneksi,"UPDATE home  set logo2='$xx' where id='$id'");
	}


	public function updatebg($id,$xx)
	{
	mysqli_query($this->koneksi,"UPDATE home  set bg='$xx' where id='$id'");
	}

	public function updateabout($id,$xx)
	{
	mysqli_query($this->koneksi,"UPDATE home  set main='$xx' where id='$id'");
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
