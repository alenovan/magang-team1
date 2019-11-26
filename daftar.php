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
      Username     <input type="text" name="username" class="form_login">
      Password     <input type="password" name="password" class="form_login">
      Nama lengkap <input type="text" name="nama" class="form_login">
      <label><p class="color_font">Jenis Kelamin<p></label>
      <input type="radio" name="gender" value="Laki-Laki">Laki-Laki
      <input type="radio" name="gender" value="Perempuan">Perempuan<br/><br/>
      Tanggal Lahir <br/><br/><input type="date" name="TTL" ><br/><br/>
    

      <table>
      <tr><td colspan="2" align="right">
      <input value="Daftar" type="submit" class="tombol_login">                 
      <input value="Batal" type="reset" class="tombol_login"></td></tr>
      </table>
      <br/>
        <p class="color_font">Sudah Punya Akun?<p><a href="login.php"><b>Login</b></a>
      </td></tr>
    </form>
    
  </div>

</html>