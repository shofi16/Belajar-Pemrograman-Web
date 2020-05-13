<!DOCTYPE html>
<html>
<head>
	<title>Halaman Operator 1</title>
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['Hak']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<h1>Halaman Operator 1</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['Hak']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>

	<br/>
	<br/>
	
	<a href= "http://localhost/web/Minggu%208/crud/">Mengakses Halaman Sekolah CRUD</a>
	
	<br/>
	<br/>


</body>
</html>