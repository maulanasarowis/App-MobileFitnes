<?php
include "koneksi.php";
?>

<html>
<head>
<meta charset="utf-8"/>
<title> MOBILE FITNESS </title>
<link rel="stylesheet" href="js/jquery.mobile-1.4.2.min.css"/>
<script src="js/jquery-1.8.2.min.js"> </script>
<script src="js/jquery.mobile-1.4.2.min.js"> </script>
<meta name="viewport" content="width-device-width, initial-scale-1">
</head>

<body>
<div data-role= "page" id="main">
	<div data-role="header">
			<marquee><h1>D&J Fitness<h1></marquee>
		</div>
	<div data-role="navbar"  data-iconpos="bottom">
		<ul>
			<li><a href="fitnes.php" data-icon="home"  data-theme='c'  >REGISTRASI</a></i>
			<li><a href="inventori.php" data-icon="bars" data-theme='c' class="ui-btn-active">DATA ALAT</a></i>
			<li><a href="keuangan.php" data-icon="bars" data-theme='c'>DATA KEUANGAN</a></i>
			<li><a href="index.php" data-icon="delete" data-theme='c'>Logout</a></i>
		</ul>
	</div>
	<div data-role="content">
	<a href="data_inventori.php" class="ui-btn ui-btn-inline">DAFTAR INVENTORI</a>
		<h1><center>PENDAFTARAN INVENTORI</center></h1><br>
		<form action='proses_inventori.php' method='post'>
			<thead>
				<label for="id">KODE ALAT :</label>
				<input type="text" name="kode" id="kode">
				<label for="nama">NAMA ALAT :</label>
				<input type="text" name="nama_alat" id="nama_alat">
				<div class="ui-field-contain">
				<label for="status">STATUS :</label>
				<select name="status" id="status">
					<option value="baik">BAIK</option>
					<option value="tidak">TIDAK BAIK</option>
				</select>
				</div>
				<br>
			</thead>
			<tbody>
				<input type='submit' name='simpan' value='SIMPAN'>
				<input type='reset' data-theme='b' name='reset' value='RESET'>
			</tbody>
		
		<div data-role="footer" data-position="fixed">
			<h2>Copy right by Raffi Elsya Pratama</h2>
		</div>
	</div>
</div>		
</body>
</html>
