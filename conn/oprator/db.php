<?php 

class header{

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


} 

?>