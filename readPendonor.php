<?php
	include 'config.php';

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn){
		die("Koneksi ke database gagal: ".mysqli_connect_error());
	}

	$idPendonor = $_POST["idPendonor"];

	$sql = "SELECT * FROM tb_pendonor INNER JOIN tb_detail_pendonor ON tb_pendonor.ID_DETAIL_PENDONOR = tb_detail_pendonor.ID_DETAIL_PENDONOR WHERE tb_pendonor.ID_PENDONOR = ".$idPendonor."";

	if(mysqli_query($conn,$sql)){
		$result = mysqli_query($conn,$sql);
		$array = mysqli_fetch_array($result,MYSQLI_ASSOC);

		echo json_encode($array);
	}else{
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}

	mysqli_Close($conn);
?>