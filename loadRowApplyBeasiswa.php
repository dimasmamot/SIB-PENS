<?php
	include 'config.php';

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn){
		die("Koneksi ke database gagal: ".mysqli_connect_error());
	}

	$jmlRow = $_POST["jmlBaris"];

	$sql = "SELECT u.EMAIL AS EMAIL_MAHASISWA, ab.ID_USER, ab.ID_BEASISWA, b.NAMA_BEASISWA, ab.TANGGAL_APPLY, ab.STATUS_PENERIMAAN, ab.STATUS_DOKUMEN FROM tb_apply_beasiswa ab INNER JOIN tb_user u ON ab.ID_USER = u.ID_USER INNER JOIN tb_beasiswa b ON ab.ID_BEASISWA = b.ID_BEASISWA";

	if(mysqli_query($conn,$sql)){
		$result = mysqli_query($conn,$sql);
		$array = mysqli_fetch_all($result,MYSQLI_ASSOC);

		echo json_encode($array);
	}else{
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}

	mysqli_Close($conn);
?>