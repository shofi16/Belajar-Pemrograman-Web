<?php
$db = "crud_pdo";
$host = mysqli_connect("localhost","root","",$db);

if ($host)
{
	echo "koneksi Host berhasil.</br>";
}
else
{
	echo "koneksi gagal.</br>";
}
 
//isikan dengan nama fatabase yang akan dihubungkan

if($db)
{
	echo "koneksi database berhasil.";
}
else
{
	echo "koneksi database gagal.";
}
?>