<?php
include "koneksi.php";
?>

<html>
<head>
<meta charset="utf-8"/>
<title> Belajar Jquery Mobile </title>
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
	<div data-role"content">
		<a href="inventori.php" class="ui-btn ui-btn-inline">Back</a>
		<center><h3>DATA INVENTORI</h3></center>
		<ul data-role="listview" data-inset="true" data-filter="true" data-split-icon="info" data-filter-placeholder="Pencarian")>
		
		<?php
			$query = mysql_query("SELECT * FROM inventori");
			while($rows = mysql_fetch_array($query)){
	
		?>
			<li><a href="delete_alat.php?kode=<?php echo $rows['kode_alat']?>">
				<table>
					<tr><td>KODE ALAT</td><td> : </td><td><?php echo $rows['kode_alat'] ?></td></tr>
					<tr><td>NAMA ALAT</td><td> : </td><td><?php echo $rows['nama_alat'] ?></td></tr>
					<tr><td>STATUS</td><td> : </td><td><?php echo $rows['status'] ?></td></tr>
				</table>
			</a></li>
		<?php	
			}
		?>
		
		</ul>	
	</div>
	<div data-role="footer" data-position="fixed">
			<h2>Copy right by Raffi Elsya Pratama</h2>
	</div>		
</div>	
</body>
</html>