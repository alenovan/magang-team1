<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>

<html>
<head>
	<title>Testing</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
 
	<h1>Percobaan<br/></h1>
 
	<div class="kotak_login">
		<p class="tulisan_login">Member Login</p>
 
		<form action="proseslogin.php" method="post">
			<label><p class="color_font">Username<p></label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email ..">
 
			<label><p class="color_font">Password<p></label>
			<input type="password" name="password" class="form_login" placeholder="Password ..">
 
			<input type="submit" class="tombol_login" value="Login"><br/><br/><input value="Batal" type="reset" class="tombol_login"></td></tr>
 
			<br/>
			<br/>
			<tr><td colspan="2" align="center" class="daftar"><p class="color_font">Belum Punya akun ?<p><a href="daftar.php"><b>Daftar</b></a></td></tr>
		</form>
		
	</div>
 
 
</body>
</html>