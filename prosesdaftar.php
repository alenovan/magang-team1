<link rel="stylesheet" type="text/css" href="loginregister.css">
<?php
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $jk = $_POST['gender'];
   $nama = $_POST['nama'];
   $TTL = $_POST['TTL'];
   $sql = "SELECT * FROM register WHERE username = '$username'";
   $query = $db->query($sql);
   echo $db->error;
   if($query->num_rows != 0) {
     echo "<div align='center' class='kotak_login'><h1>Username Sudah Terdaftar!</h1><a href='daftar.php'>Back</a></div>";
   } else {
     if(!$username || !$pass) {
       echo "<div align='center' class='kotak_login'><h1>Masih ada data yang kosong!</h1><a href='daftar.php'>Back</a>";
     } else {
       $data = "INSERT INTO register VALUES (NULL, '$username', '$pass')";
       $simpan = $db->query($data); 

       if($simpan) {
        $id = $db->insert_id;
        $data = "INSERT INTO member VALUES (NULL,'$id','$nama','$jk','$TTL')";
        $jalan = $db->query($data); 
         echo "<div align='center' class='kotak_login'><h1>Pendaftaran Sukses, Silahkan </h1><a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center' class='kotak_login'><h1>Proses Gagal!</h1></div>";
       }
     }
   }
?>