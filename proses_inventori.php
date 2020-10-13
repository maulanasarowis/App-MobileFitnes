<head>
<title> MOBILE FITNESS</title>
<script src="js/jquery.js"></script>
</head>
<body>

<?php
	include "koneksi.php";
	
if(isset($_POST['simpan'])){
		$info = mysql_query("INSERT INTO inventori(kode_alat,nama_alat,status)VALUES('$_POST[kode]','$_POST[nama_alat]',
		'$_POST[status]')");
		if ($info) {
			echo "<script>alert('DATA BERHASIL DISIMPAN'); window.location='data_inventori.php';</script>";
		}else {
			echo "<script>alert('DATA GAGAL DISIMPAN!'); window.location='inventori.php';</script>";
		}
	}else if(isset($_POST['update'])){
		$info = mysql_query("UPDATE inventori SET nama_alat= '$_POST[nama_alat]',status = '$_POST[status]' WHERE kode_alat = '$_GET[kode]'");
		if ($info) {
			echo "<script>alert('DATA BERHASIL DIUBAH'); window.location='data_inventori.php';</script>";
		}else {
			echo "<script>alert('DATA GAGAL DISIMPAN!'); window.location='inventori.php';</script>";
		}
	}else { 
		$info = mysql_query("DELETE FROM inventori WHERE kode_alat = '$_GET[delete]'");
		if ($info) {
			echo "<script>alert('DATA BERHASIL DIHAPUS'); window.location='data_inventori.php';</script>";
		}else {
			echo "<script>alert('DATA GAGAL DIHAPUS!'); window.location='inventori.php';</script>";
		}
	}
?>	
</body>
</html>		