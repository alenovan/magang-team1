<link rel="stylesheet" type="text/css" href="loginregister.css">
<?php
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $sql = "SELECT * FROM register WHERE username = '$username'";
   $query = $db->query($sql);
   echo $db->error;
   if($query->num_rows != 0) {
     echo "<div align='center'><h1>Username Sudah Terdaftar!</h1><a href='daftar.php'>Back</a></div>";
   } else {
     if(!$username || !$pass) {
       echo "<div align='center'><h1>Masih ada data yang kosong!</h1><a href='daftar.php'>Back</a>";
     } else {
       $data = "INSERT INTO register VALUES (NULL, '$username', '$pass')";
       $simpan = $db->query($data);
       if($simpan) {
        "INSERT INTO member"
         echo "<div align='center'><h1>Pendaftaran Sukses, Silahkan </h1><a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center'><h1>Proses Gagal!</h1></div>";
       }
     }
   }
?>