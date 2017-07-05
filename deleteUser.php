<?php
	include 'config.php';

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn){
		die("Koneksi ke database gagal: ".mysqli_connect_error());
	}

	$idDihapus = $_POST["idDihapus"];

	$sql = "DELETE u.*, du.* FROM tb_user u INNER JOIN tb_detail_user du ON u.ID_DETAIL_USER = du.ID_DETAIL_USER WHERE u.ID_USER = ".$idDihapus."";

	if(mysqli_query($conn,$sql)){
		$result = mysqli_query($conn,$sql);
		$array = mysqli_fetch_array($result,MYSQLI_ASSOC);

		echo "Berhasil Menghapus Record";
	}else{
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}

	mysqli_Close($conn);
?>