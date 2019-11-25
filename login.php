<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>

<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="loginregister.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
 
 
	<div class="kotak_login">
		<h1>Member Login</h1>
 
		<form action="proseslogin.php" method="post">
			<label><p class="color_font">Username<p></label>
			<input type="text" name="username" class="form_login" placeholder="Username atau Email">
 
			<label><p class="color_font">Password<p></label>
			<input type="password" name="password" class="form_login" placeholder="Password">
 
		<table>
      		<tr><td colspan="2" align="right">
      		<input value="Login" type="submit" class="tombol_login">                 
      		<input value="Batal" type="reset" class="tombol_login"></td></tr>
      	</table>
 
			<br/>
			<br/>
			<tr><td colspan="2" align="center" class="">
				<p class="color_font">Belum Punya akun ?<p><a href="daftar.php"><b>Daftar</b></a>
			</td></tr>
		</form>
		
	</div>
 
 
</body>
</html>