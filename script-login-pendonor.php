<?php
	include 'config.php';

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn){
		die("Koneksi ke database gagal: ".mysqli_connect_error());
	}

	$email = $_POST["emailDonor"];
	$password = md5($_POST["passwordDonor"]);

	$sql = "SELECT COUNT(ID_PENDONOR) AS JUMLAH, ID_PENDONOR AS ID FROM tb_pendonor where EMAIL_PENDONOR = '".$email."' and PASSWORD_PENDONOR = '".$password."'";

	if(mysqli_query($conn,$sql)){
		$result = mysqli_query($conn,$sql);
		$array = mysqli_fetch_array($result,MYSQLI_ASSOC);

		if(mysqli_num_rows($result) > 0){
			session_start();
			$id = $array['ID'];
			$_SESSION["id"] = $id;
			$_SESSION["role"] = "pendonor";
			$_SESSION["email"] = $email;
		}
		echo json_encode($array);
	} else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}
	
	mysqli_close($conn);	

?>