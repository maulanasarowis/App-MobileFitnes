<head>
<title> MOBILE FITNESS</title>
<script src="js/jquery.js"></script>
</head>
<body>

<?php
	include "koneksi.php";
	
	if(isset($_POST['simpan'])){
		$tanggal="$_POST[tahun]-$_POST[bulan]-$_POST[hari]";
		$info = mysql_query("INSERT INTO member(id_member,nama_member,jenis_kelamin,alamat,tgl_daftar)VALUES('$_POST[id]','$_POST[nama]',
		'$_POST[jeniskelamin]','$_POST[alamat]','$tanggal')");
		if ($info) {
			echo "<script>alert('DATA BERHASIL DISIMPAN!'); window.location='datafitnes.php';</script>";
		}else {
			echo "<script>alert('DATA GAGAL DISIMPAN!'); window.location='fitnes.php';</script>";
		}
	}else if (isset($_POST['update'])){
		$tanggal="$_POST[tahun]-$_POST[bulan]-$_POST[hari]";
		$info = mysql_query("UPDATE member SET nama_member= '$_POST[nama]',jenis_kelamin = '$_POST[jeniskelamin]',alamat = '$_POST[alamat]',tgl_daftar = '$tanggal' WHERE id_member = '$_GET[id]'");
		if ($info) {
			echo "<script>alert('DATA BERHASIL DIUBAH!'); window.location='datafitnes.php';</script>";
		}else {
			echo "<script>alert('DATA GAGAL DIUBAH!'); window.location='fitnes.php';</script>";
		}	
	}else {
		$info = mysql_query ("DELETE FROM member WHERE id_member = '$_GET[delete]'");
		if ($info){
			echo "<script>alert('DATA BERHASIL DIHAPUS!'); window.location='datafitnes.php';</script>";
		}else {
			echo "<script>alert('DATA GAGAL DIHAPUS!'); window.location='fitnes.php';</script>";
		}
	}
?>
</body>
</html>