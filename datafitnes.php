<?php
error_reporting(0);
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
	<a href="fitnes.php" class="ui-btn ui-btn-inline">Back</a>
		<center><h3>DATA MEMBER</h3></center>
		<ul data-role="listview" data-inset="true" data-filter="true" data-split-icon="info" data-filter-placeholder="Pencarian")>
		<?php
			$query = mysql_query("SELECT * FROM member");
			while($rows = mysql_fetch_array($query)){
				$t=explode("-", $rows['tgl_daftar']);
            	$tanggal="$t[2]-$t[1]-$t[0]";
            	
		?>
			<li><a href="delete.php?id=<?php echo $rows['id_member']?>">
				<table>
					<tr><td>ID MEMBER</td><td> : </td><td><?php echo $rows['id_member'] ?></td></tr>
					<tr><td>NAMA MEMBER</td><td> : </td><td><?php echo $rows['nama_member'] ?></td></tr>
					<tr><td>JENIS KELAMIN</td><td> : </td><td><?php echo $rows['jenis_kelamin'] ?></td></tr>
					<tr><td>ALAMAT</td><td> : </td><td><?php echo $rows['alamat'] ?></td></tr>
					<tr><td>TANGGAL PENDAFTARAN</td><td> : </td><td><?php echo $tanggal; ?></td></tr>
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