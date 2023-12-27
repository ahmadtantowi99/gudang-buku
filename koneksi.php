<?php

	$host='localhost';
	$user='root';
	$password='';
	$database='a_tantowi_ujikom';
	
	$konek=
	mysql_connect($host,$user,$password)
	or die ('Koneksi Gagal! '); 
	mysql_select_db($database,$konek);
	
?>