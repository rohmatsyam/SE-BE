<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "sekolahekspor";
	var $conn;

	function __construct(){
		$this->conn = new mysqli($this->host, $this->uname, $this->pass, $this->db);
	}

    function tampil_data(){
		$data = mysqli_query($this->conn,"select * from user");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

    function store($nama,$alamat,$pekerjaan){
		mysqli_query($this->conn,"insert into user (nama,alamat,pekerjaan) values('$nama','$alamat','$pekerjaan')");
	}

    function delete($id){
        mysqli_query($this->conn,"delete from user where id='$id'");
    }

    function edit($id){
        $data = mysqli_query($this->conn,"select * from user where id='$id'");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
     
    function update($id,$nama,$alamat,$pekerjaan){
        mysqli_query($this->conn,"update user set nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan' where id='$id'");
    }

} 

?>