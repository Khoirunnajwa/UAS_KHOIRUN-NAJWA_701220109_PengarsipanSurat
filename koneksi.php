<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "new_sias";
	//koneksi
	$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	//cek
		if(mysqli_connect_errno()){
			echo 'Koneksi gagal :' .mysqli_connect_errno();
		}
?>
