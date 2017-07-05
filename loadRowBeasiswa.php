<?php
	include 'config.php';

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn){
		die("Koneksi ke database gagal: ".mysqli_connect_error());
	}

	$jmlRow = $_POST["jmlBaris"];

	$sql = "SELECT USER_PENDONOR AS PENDONOR, ID_BEASISWA, NAMA_BEASISWA, TANGGAL_BEASISWA_DIBUKA, DEADLINE_BEASISWA, STATUS_BEASISWA, PENDAFTAR_BEASISWA FROM tb_beasiswa INNER JOIN tb_pendonor ON tb_beasiswa.ID_PENDONOR = tb_pendonor.ID_PENDONOR";

	if(mysqli_query($conn,$sql)){
		$result = mysqli_query($conn,$sql);
		$array = mysqli_fetch_all($result,MYSQLI_ASSOC);

		echo json_encode($array);
	}else{
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}

	mysqli_Close($conn);
?>