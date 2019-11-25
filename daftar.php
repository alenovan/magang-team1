<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>
<html>
<title>Form Pendaftaran</title>
<link rel="stylesheet" type="text/css" href="loginregister.css">
  <div class="kotak_login">
    <h1>Daftar Baru</h1>
 
    <form action="prosesdaftar.php" method="post">
      <label><p class="color_font">Username<p></label>
      <input type="text" name="username" class="form_login">
 
      <label><p class="color_font">Password<p></label>
      <input type="password" name="password" class="form_login">
      <table>
      <tr><td colspan="2" align="right">
      <input value="Daftar" type="submit" class="tombol_login">                 
      <input value="Batal" type="reset" class="tombol_login"></td></tr>
      </table>
      <br/>
      <br/>
      <tr><td colspan="2" align="center" class="">
        <p class="color_font">Belum Punya akun ?<p><a href="login.php"><b>Login</b></a>
      </td></tr>
    </form>
    
  </div>

</html>