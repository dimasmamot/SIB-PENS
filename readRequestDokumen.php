<?php
	include 'config.php';

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn){
		die("Koneksi ke database gagal: ".mysqli_connect_error());
	}

	$idMahasiswa = $_POST["idMahasiswa"];
	$idDokumenProses = $_POST["idDokumenProses"];

	$sql = "SELECT * FROM tb_request INNER JOIN tb_dokumen_proses ON tb_request.ID_DOKUMEN_PROSES = tb_dokumen_proses.ID_DOKUMEN_PROSES WHERE tb_request.ID_USER = ".$idMahasiswa." AND tb_dokumen_proses.ID_DOKUMEN_PROSES = ".$idDokumenProses."";

	if(mysqli_query($conn,$sql)){
		$result = mysqli_query($conn,$sql);
		$array = mysqli_fetch_array($result,MYSQLI_ASSOC);

		echo json_encode($array);
	}else{
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}

	mysqli_Close($conn);
?>