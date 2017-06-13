<?php
	include 'config.php';

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn){
		die("Koneksi ke database gagal: ".mysqli_connect_error());
	}

	$namaPendonor = $_POST["nama"];
	$teleponPendonor = $_POST["telepon"];
	$alamatPendonor = $_POST["alamat"];
	$namaPJBeasiswa = $_POST["penanggungJawab"];

	$usernamePendonor = $_POST["username"];
	$passwordPendonor = md5($_POST["password"]);
	$emailPendonor = $_POST["email"];
	$saltPendonor = "saltnya";
	$tanggalPembuatan = date("Y-m-d H:i:s");
	$terakhirLogin = date("Y-m-d H:i:s");

	//Insert ke tabel tb_detail_pendonor
	// $sql = "INSERT INTO tb_detail_pendonor (nama_pendonor, nomor_telepon_pendonor, alamat_pendonor, nama_pj_beasiswa) VALUES (".$namaPendonor.", ".$teleponPendonor.", ".$alamatPendonor.", ".$namaPJBeasiswa.")";
	$sql = "INSERT INTO tb_detail_pendonor (nama_pendonor, nomor_telepon_pendonor, alamat_pendonor, nama_pj_beasiswa) VALUES ('$namaPendonor', '$teleponPendonor', '$alamatPendonor', '$namaPJBeasiswa')";


	if(mysqli_query($conn, $sql)){
		$last_id = mysqli_insert_id($conn);
	} else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}

	// $sql = "INSERT INTO tb_pendonor (id_detail_pendonor, user_pendonor, password_pendonor, email_pendonor, salt_pendonor, tanggal_pembuatan_pendonor, terakhir_login_pendonor) VALUES (".$last_id.", ".$usernamePendonor.", ".$passwordPendonor.", ".$emailPendonor.", ".$saltPendonor.", ".$tanggalPembuatan.", ".$terakhirLogin.")";
	$sql = "INSERT INTO tb_pendonor (id_detail_pendonor, user_pendonor, password_pendonor, email_pendonor, salt_pendonor, tanggal_pembuatan_pendonor, terakhir_login_pendonor) VALUES ('$last_id', '$usernamePendonor', '$passwordPendonor', '$emailPendonor', '$saltPendonor', '$tanggalPembuatan', '$terakhirLogin')";

	if(mysqli_query($conn, $sql)){
		echo "Sukses";
	} else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}

	mysqli_close($conn);
?>