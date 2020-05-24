<?php
	include "pbo02.php";
	echo "<html><head><title>Mahasiswa</title></head><body>";
	
	$form = new Form ("","Input Form");
	$form->add_Field ("txtnim", "Nim");
	$form->add_Field ("txtnama", "Nama");
	$form->add_Field ("txtalamat", "Alamat");
	
	echo "<h3>Silahkan isi form berikut ini :</h3>";
	$form->displayForm();
	echo "</body></html>";
?>