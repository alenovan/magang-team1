<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>
<html>
<title>Form Pendaftaran</title>
<link rel="stylesheet" type="text/css" href="loginregister.css">

<div align='center' class="kotak_login">
  <form action="prosesdaftar.php" method="post">
  <table>
  <tbody>
  <tr><td colspan="2" align="center"><h1>Daftar Baru</h1></td></tr>
  <tr><td><p class="color_font">Username</p></td><td> : <input name="username" type="text" class="form_login"></td></tr>
  <tr><td><p class="color_font">Password</p></td><td> : <input name="password" type="password" class="form_login"></td></tr>
  <tr><td colspan="2" align="right"><input value="Daftar" type="submit" class="tombol_login"> 
                                    <input value="Batal" type="reset" class="tombol_login"></td></tr>
  <tr><td colspan="2" align="center"><p class="color_font">Sudah Punya akun ? </p><a href="login.php"><b>Login</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>
</html>