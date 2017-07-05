<?php
	include 'config.php';

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn){
		die("Koneksi ke database gagal: ".mysqli_connect_error());
	}

	$jmlRow = $_POST["jmlBaris"];

	$sql = "SELECT d.ID_DOKUMEN, u.EMAIL, d.NAMA_DOKUMEN, d.PATH_DOKUMEN, d.JENIS_DOKUMEN FROM tb_dokumen d INNER JOIN tb_user u ON d.ID_USER = u.ID_USER";

	if(mysqli_query($conn,$sql)){
		$result = mysqli_query($conn,$sql);
		$array = mysqli_fetch_all($result,MYSQLI_ASSOC);

		echo json_encode($array);
	}else{
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}

	mysqli_Close($conn);
?>