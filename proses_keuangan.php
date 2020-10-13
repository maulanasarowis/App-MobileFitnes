<head>
<title> MOBILE FITNESS</title>
<script src="js/jquery.js"></script>
</head>
<body>

<?php
	include "koneksi.php";
	
	if(isset($_POST['simpan'])){
		$tanggal="$_POST[tahun]-$_POST[bulan]-$_POST[hari]";
		$info = mysql_query("INSERT INTO keuangan(id_member,harga,tgl_bayar)VALUES('$_POST[id]','$_POST[jenis]','$tanggal')");
		if ($info) {
			echo "<script>alert('DATA BERHASIL DISIMPAN!'); window.location='datakeuangan.php';</script>";
		}else {
			echo "<script>alert('DATA GAGAL DISIMPAN!'); window.location='keuangan.php';</script>";
		}
	}else if (isset($_POST['update'])){
		$tanggal="$_POST[tahun]-$_POST[bulan]-$_POST[hari]";
		$info1 = mysql_query("UPDATE keuangan SET id_member= '$_POST[member]',harga = '$_POST[jenis]',tgl_bayar = '$tanggal' WHERE id_keuangan = '$_GET[kode]'");
		if ($info1) {
			echo "<script>alert('DATA BERHASIL DIUBAH!'); window.location='datakeuangan.php';</script>";
		}else {
			echo "<script>alert('DATA GAGAL DIUBAH!'); window.location='keuangan.php';</script>";
		}	
	}else {
		$info = mysql_query ("DELETE FROM keuangan WHERE id_keuangan = '$_GET[delete]'");
		if ($info){
			echo "<script>alert('DATA BERHASIL DIHAPUS!'); window.location='datakeuangan.php';</script>";
		}else {
			echo "<script>alert('DATA GAGAL DIHAPUS!'); window.location='keuangan.php';</script>";
		}
	}
?>
</body>
</html>