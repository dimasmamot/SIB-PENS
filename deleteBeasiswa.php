<?php
	include 'config.php';

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn){
		die("Koneksi ke database gagal: ".mysqli_connect_error());
	}

	$idDihapus = $_POST["idDihapus"];

	$sql = "DELETE b.*, db.* FROM tb_beasiswa b INNER JOIN tb_detail_beasiswa db ON b.ID_DETAIL_BEASISWA = db.ID_DETAIL_BEASISWA WHERE b.ID_BEASISWA = ".$idDihapus."";

	if(mysqli_query($conn,$sql)){
		$result = mysqli_query($conn,$sql);
		$array = mysqli_fetch_array($result,MYSQLI_ASSOC);

		echo "Berhasil Menghapus Record";
	}else{
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}

	mysqli_Close($conn);
?>