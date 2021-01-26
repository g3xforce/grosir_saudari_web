<?php 
	$host='localhost';
	$user='root';
	$pass='';
	$database='grosir_saudari_db';

	$konek=mysqli_connect($host, $user, $pass);

	mysqli_select_db($konek, $database);
 ?>