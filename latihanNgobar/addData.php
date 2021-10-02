<?php
	include "koneksi.php";

	$firstname = $_POST ["fname"];
	$lastname = $_POST["lname"];

	$query = "INSERT INTO user(firstName,lastName) VALUES ('".$firstname."','".$lastname."')";
	$insert = mysqli_query($conn,$query);
	if ($insert == true) {
		echo "<br>";
		// echo "Data Berhasil di Input";
		// header("Location: /latihanNgoding/index.php");
		// exit(0);
		echo "<SCRIPT> 
        alert('Berhasil Input Data');
        window.location.replace('index.php');
        </SCRIPT>";

	}else {
		echo "<br>";
		echo "<SCRIPT> 
        alert('Data Gagal Di Input');
        window.location.replace('index.php');
        </SCRIPT>";
	}
?>