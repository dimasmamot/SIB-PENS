<?php
	include 'config.php';

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn){
		die("Koneksi ke database gagal: ".mysqli_connect_error());
	}

	$idMahasiswa = $_POST["idMahasiswa"];
	$idBeasiswa = $_POST["idBeasiswa"];

	$sql = "SELECT * FROM tb_apply_beasiswa WHERE ID_USER = ".$idMahasiswa." AND ID_BEASISWA = ".$idBeasiswa."";

	if(mysqli_query($conn,$sql)){
		$result = mysqli_query($conn,$sql);
		$array = mysqli_fetch_array($result,MYSQLI_ASSOC);

		echo json_encode($array);
	}else{
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}

	mysqli_Close($conn);
?>