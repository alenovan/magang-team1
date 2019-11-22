<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>

<html>
<head>
	<title>Testing</title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<tbody>
 
	<h1>Percobaan<br/></h1>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="proseslogin.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email ..">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..">
 
			<input type="submit" class="tombol_login" value="Login"><br/><br/><input value="Batal" type="reset" class="tombol_login"></td></tr>
 
			<br/>
			<br/>
			<tr><td colspan="2" align="center" class="daftar">Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a></td></tr>
		</form>
		
	</div>
 
 
</tbody>
</html>