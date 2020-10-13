<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="js/jquery.mobile-1.4.2.min.css"/>
<script src="js/jquery-1.8.2.min.js"> </script>
<script src="js/jquery.mobile-1.4.2.min.js"> </script>
<meta name="viewport" content="width-device-width, initial-scale-1">
</head>

<body>
	
	<div data-role="page" id="page3">
		<div data-role="header">
			<marquee><h1>D&J Fitness<h1></marquee>
		</div>
		<div data-role="navbar">
			<ul>
				<li><a href="#page3" class="ui-btn-active">
			<h3><center>Login</center></h3></a></li>
			</ul>
		</div><!-- /navbar -->
		<div data-role="content">
			
			<form action="login.php?op=in" method='post'>
			<label for="nama">Username :</label>
			<input type="text" name="username" id="username">
			<label for="alamat">Password:</label>
			<input type="text" name="password" id="password">
			<input type='submit' name='login' value='LOGIN'>
			<input type='reset' data-theme='b' name='reset' value='RESET' onclick="window.location='#page3'">
		</div>
		
		<div data-role="footer" data-position="fixed">
			<h2>Copy right by Raffi Elsya Pratama</h2>
		</div>
	</div>

</body>
</html>