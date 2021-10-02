<?php
error_reporting(0);
	include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Data Nama</title>
</head>
<body>
	<?php
	$data = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM user where id='$_GET[id]'"));
	
	$firstname= mysqli_real_escape_string($conn, $_POST['firstname']);    
	$lastname= mysqli_real_escape_string($conn, $_POST['lastname']); 

	if(isset($_POST['simpan'])){
 	$save=mysqli_query($conn, "UPDATE user set firstname='$firstname',lastname='$lastname' where id='$_GET[id]'");
    if($save){ //jika simpan berhasil maka muncul pesan dan menuju ke halaman produk
        echo "<script>alert('Data Produk Berhasil disimpan ke database');document.location='index.php'</script>";
    }else{  //jika simpan gagal maka muncul pesan
         echo "<script>alert('Proses simpan gagal, coba kembali');document.location='index.php'</script>";
    }
	}
	?>
	
	<form action="" method="POST" enctype="multipart/form-data">
		<label for="firstname">First name:</label><br>
		<input type="text" name="firstname" value="<?php echo $data['firstname'];?>"><br>
		<label for="lastname">Last name:</label><br>
		<input type="text" name="lastname" value="<?php echo $data['lastname'];?>"><br><br>
		<button type="submit" name="simpan">Proses Data</button>
</form> 
</body>
</html>