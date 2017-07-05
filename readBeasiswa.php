<?php
	include 'config.php';

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn){
		die("Koneksi ke database gagal: ".mysqli_connect_error());
	}

	$idBeasiswa = $_POST["idBeasiswa"];

	$sql = "SELECT * FROM tb_beasiswa INNER JOIN tb_detail_beasiswa ON tb_beasiswa.ID_DETAIL_BEASISWA = tb_detail_beasiswa.ID_DETAIL_BEASISWA WHERE tb_beasiswa.ID_BEASISWA = ".$idBeasiswa."";

	if(mysqli_query($conn,$sql)){
		$result = mysqli_query($conn,$sql);
		$array = mysqli_fetch_array($result,MYSQLI_ASSOC);

		echo json_encode($array);
	}else{
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}

	mysqli_Close($conn);
?>