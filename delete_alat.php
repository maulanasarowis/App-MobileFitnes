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
	</div>	
	<div data-role="content">
		<h1><center>FORM UPDATE INVENTORI</center></h1><br>
		<form action='proses_inventori.php?kode=<?php echo $_GET['kode']?>' method='post'>
			<thead>
				<?php	
					$query = mysql_query("SELECT * FROM inventori WHERE kode_alat = '$_GET[kode]'");
					$rows = mysql_fetch_array($query);
				?>	
				<label for="nama">NAMA ALAT :</label>
				<input type="text" name="nama_alat" id="nama_alat" value="<?php echo $rows['nama_alat'];?>">
				<div class="ui-field-contain">
				<label for="status">STATUS :</label>
				<select name="status" id="status">
					<option value="<?php echo $rows['status'];?>"><?php echo $rows['status'];?></option>
					<option value="BAIK">BAIK</option>
					<option value="TIDAK BAIK">TIDAK BAIK</option>
				</select>
			</thead>
			
		</div>
		<tbody>
				<input type='submit' name='update' value='UPDATE'>
				<input type='button' data-theme='b' name='delete' value='DELETE' onclick="window.location='proses_inventori.php?delete=<?php echo $_GET['kode']?>'">
				<input type='button' data-theme='b' name='batal' value='BATAL' onclick="window.location='data_inventori.php'">
			</tbody>
		<div data-role="footer" data-position="fixed">
			<h2>Copy right by Raffi Elsya Pratama</h2>
		</div>
	</div>
</div>		
</body>
</html>