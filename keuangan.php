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
			<li><a href="fitnes.php" data-icon="home"  data-theme='c'>REGISTRASI</a></i>
			<li><a href="inventori.php" data-icon="bars" data-theme='c'>DATA ALAT</a></i>
			<li><a href="keuangan.php" data-icon="bars" data-theme='c'  class="ui-btn-active">DATA KEUANGAN</a></i>
			<li><a href="index.php" data-icon="delete" data-theme='c'>Logout</a></i>
		</ul>
	</div>	
	<div data-role="content">
	<a href="datakeuangan.php" class="ui-btn ui-btn-inline">DAFTAR KEUANGAN</a>
		<h1><center>FORM PEMBAYARAN</center></h1><br>
		<form action='proses_keuangan.php' method='post'>
			<thead>
				<label for="id">ID MEMBER :</label>
				<input type="text" name="id" id="id" placeholder="Contoh:2525*** (3 digit belakang sesuai anda)">

				<label for="tgl">TANGGAL PEMBAYARAN :</label>
                <div class="controls">
                  <select name="hari" class="input-small">
                    <option value="0" selected="selected">Tanggal</option>
                    <?php
                      for($h=1; $h<=31; $h++){
                        echo"<option value=",$h,">",$h,"</option>";
                      }
                    ?>
                  </select>
                  <select name="bulan" class="input-small">
                    <option value='0' selected='selected'>Bulan</option>
                    <?php
                      for($i=1; $i<=12; $i++){
                        echo"<option value=",$i,">",$i,"</option>";
                      }
                    ?>
                  </select>
                  <select name='tahun' class="input-small">
                    <option value='0' selected='selected'>Tahun</option>";
                    <?php
                      $now =  date("Y");
                      $saiki = 1900;
                      for($l=$saiki; $l<=$now; $l++){
                        echo"<option value=",$l,">",$l,"</option>";
                      } 
                    ?>
                  </select>
				</div>
				<div class="ui-field-contain">
				<label for="jeniskelamin">JENIS PEMBAYARAN :</label>
				<select name="jenis" id="jenis">
					<option value="15000">Harian</option>
					<option value="100000">Bulanan</option>
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
