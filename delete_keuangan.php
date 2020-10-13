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
		<h1><center>FORM UPDATE</center></h1><br>
		<form action='proses_keuangan.php?kode=<?php echo $_GET['id']?>' method='post'>
			<thead>
				<?php	
					$query = mysql_query("SELECT * FROM keuangan WHERE id_keuangan = '$_GET[id]'");
					$rows = mysql_fetch_array($query);
					$tg=explode("-", $rows['tgl_bayar']);
				?>	
				<label for="nama">ID MEMBER :</label>
				<input type="text" name="member" id="member" value="<?php echo $rows['id_member'];?>">
				
				<label for="tgl">TANGGAL PENDAFTARAN :</label>
                <div class="controls">
                  <select name="hari" class="input-small">
                    <option value="<?php echo $tg[2]; ?>" selected="selected"><?php echo $tg[2]; ?></option>
                    <?php
                      for($h=1; $h<=31; $h++){
                        echo"<option value=",$h,">",$h,"</option>";
                      }
                    ?>
                  </select>
                  <select name="bulan" class="input-small">
                    <option value="<?php echo $tg[1]; ?>" selected="selected"><?php echo $tg[1]; ?></option>
                    <?php
                      for($i=1; $i<=12; $i++){
                        echo"<option value=",$i,">",$i,"</option>";
                      }
                    ?>
                  </select>
                  <select name='tahun' class="input-small">
                    <option value="<?php echo $tg[0]; ?>" selected="selected"><?php echo $tg[0]; ?></option>
                    <?php
                      $now =  date("Y");
                      $saiki = 1900;
                      for($l=$saiki; $l<=$now; $l++){
                        echo"<option value=",$l,">",$l,"</option>";
                      } 
                    ?>
                  </select>
                  <div class="ui-field-contain">
				<label for="jenis">JENIS BAYAR :</label>
				<select name="jenis" id="jenis">
					<option value="<?php echo $rows['harga'];?>"><?php
					if ($rows['harga']==15000) {
					 	echo "Harian";
					 }else {
					 	echo "Bulanan";
					 } ?></option>
					<option value="15000">Harian</option>
					<option value="100000">Bulanan</option>
				</select>
				</div>
				<br>
			</thead>
			<tbody>
				<input type='submit' name='update' value='UPDATE'>
				<input type='button' data-theme='b' name='delete' value='DELETE' onclick="window.location='proses_keuangan.php?delete=<?php echo $_GET['id']?>'">
				<input type='button' data-theme='b' name='batal' value='BATAL' onclick="window.location='datakeuangan.php'">
			</tbody>
		
		<div data-role="footer" data-position="fixed">
			<h2>Copy right by Raffi Elsya Pratama</h2>
		</div>
	</div>
</div>		
</body>
</html>