<?php
	include 'config.php';

	session_start();

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn){
		die("Koneksi ke database gagal: ".mysqli_connect_error());
	}

	$sql = "SELECT * FROM tb_beasiswa INNER JOIN tb_detail_beasiswa ON tb_beasiswa.id_detail_beasiswa = tb_detail_beasiswa.id_detail_beasiswa";

	if(mysqli_query($conn,$sql)){
		$result = mysqli_query($conn,$sql);
		$array = mysqli_fetch_all($result,MYSQLI_ASSOC);

		echo json_encode($array);
	} else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}
	
	mysqli_close($conn);	

?>