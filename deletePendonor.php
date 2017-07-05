<?php
	include 'config.php';

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn){
		die("Koneksi ke database gagal: ".mysqli_connect_error());
	}

	$idDihapus = $_POST["idDihapus"];

	$sql = "DELETE p.*, dp.* FROM tb_pendonor p INNER JOIN tb_detail_pendonor dp ON p.ID_DETAIL_PENDONOR = dp.ID_DETAIL_PENDONOR WHERE p.ID_PENDONOR = ".$idDihapus."";

	if(mysqli_query($conn,$sql)){
		$result = mysqli_query($conn,$sql);
		$array = mysqli_fetch_array($result,MYSQLI_ASSOC);

		echo "Berhasil Menghapus Record";
	}else{
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}

	mysqli_Close($conn);
?>