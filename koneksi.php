<?php
	mysql_connect("localhost","root","")or die("GAGAL KONEKSI : ".mysql_error());
	mysql_select_db("db_fitnes")or die("GAGAL KONEKSI KEDATABASE : ".mysql_error());
?>