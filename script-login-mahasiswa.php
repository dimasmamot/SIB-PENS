<?php
	include 'config.php';

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn){
		die("Koneksi ke database gagal: ".mysqli_connect_error());
	}

	$email = $_POST["emailMhs"];
	$password = md5($_POST["passwordMhs"]);

	$sql = "SELECT COUNT(ID_USER) AS JUMLAH, ROLE, ID_USER AS ID FROM tb_user where EMAIL = '".$email."' and PASSWORD = '".$password."'";

	if(mysqli_query($conn,$sql)){
		$result = mysqli_query($conn,$sql);
		$array = mysqli_fetch_array($result,MYSQLI_ASSOC);

		if(mysqli_num_rows($result) > 0){
			session_start();
			$id = $array['ID'];
			$role = $array['ROLE'];
			$_SESSION["id"] = $id;
			$_SESSION["role"] = $role;
			$_SESSION["email"] = $email;
		}
		echo json_encode($array);
	} else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}
	
	mysqli_close($conn);	

?>