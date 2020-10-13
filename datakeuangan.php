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
	<a href="keuangan.php" class="ui-btn ui-btn-inline">Back</a>
		<center><h3>DATA KEUANGAN</h3></center>
		<ul data-role="listview" data-inset="true" data-filter="true" data-split-icon="info" data-filter-placeholder="Pencarian")>
		<?php
			$query = mysql_query("SELECT * FROM keuangan, member where keuangan.id_member=member.id_member");
			while($rows = mysql_fetch_array($query)){
				$t=explode("-", $rows['tgl_bayar']);
            	$tanggal="$t[2]-$t[1]-$t[0]";
            	;
		?>
			<li><a href="delete_keuangan.php?id=<?php echo $rows['id_keuangan']?>">
				<table>
					<tr><td>ID MEMBER</td><td> : </td><td><?php echo $rows['id_member'] ?></td></tr>
					<tr><td>NAMA</td><td> : </td><td><?php echo $rows['nama_member'] ?></td></tr>
					<tr><td>JENIS BAYAR</td><td> : </td><td><?php 
					if ($rows['harga']==15000) {
						echo "Harian";
					}else {
						echo "Bulanan";
					}
					?></td></tr>
					<tr><td>HARGA</td><td> : </td><td>Rp. <?php echo $rows['harga'] ?></td></tr>
					<tr><td>TANGGAL BAYAR</td><td> : </td><td><?php echo $tanggal; ?></td></tr>
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