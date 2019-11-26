<link rel="stylesheet" type="text/css" href="loginregister.css">
<?php
session_start();
	include 'koneksi.php';
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<title>Halaman Sukses Login</title>
<div align='center' class="kotak_login">
   Selamat Datang, <b><?php echo $username;?></b><br/><br/><a href="logout.php"><b>Logout</b></a>
</div>

<?php 
		echo "<div class='kotak_login'>";
		$no = '1';
		
		$data = mysqli_query($db,"select * from register where username = '$username'");
		$d = mysqli_fetch_array($data);
		$id_register = $d['id_register'];
		$data = mysqli_query($db,"select * from member where id_register = '$id_register'");
		$d = mysqli_fetch_array($data);
		echo "Nama :".$d['nama'].'<br/>';
		echo "TTL  :".$d['TTL'].'<br/>';
		echo "Jenis Kelamin :".$d['gender'].'<br/>';		