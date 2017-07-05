<?php
	include 'config.php';

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn){
		die("Koneksi ke database gagal: ".mysqli_connect_error());
	}

	$jmlRow = $_POST["jmlBaris"];

	$sql = "SELECT u.EMAIL AS EMAIL_MAHASISWA, r.ID_USER, r.ID_DOKUMEN_PROSES, dp.NAMA_DOKUMEN_PROSES, dp.JENIS_DOKUMEN_PROSES, r.TANGGAL_REQUEST_DOKUMEN, r.TANGGAL_REQUEST_DIPENUHI, r.STATUS_REQUEST_DOKUMEN, r.CATATAN_TAMBAHAN_REQUEST FROM tb_request r INNER JOIN tb_user u ON r.ID_USER = u.ID_USER INNER JOIN tb_dokumen_proses dp ON r.ID_DOKUMEN_PROSES = dp.ID_DOKUMEN_PROSES";

	if(mysqli_query($conn,$sql)){
		$result = mysqli_query($conn,$sql);
		$array = mysqli_fetch_all($result,MYSQLI_ASSOC);

		echo json_encode($array);
	}else{
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}

	mysqli_Close($conn);
?>