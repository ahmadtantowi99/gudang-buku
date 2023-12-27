<html>
<head>
	<title>MATA PELAJARAN</title></head>
<body background="dasarweb.jpg">
<center>

<font size=15>
<br><br><br><br><br>

<?php 
session_start();
require_once("koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM login WHERE username = '$username'");
	
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if($jumlah == 0) {
echo "User tidak ditemukan<br/>";
echo "<a href=login.php> Back</a>";
} else {
if($password <> $hasil['password']) {
echo "Password Salah!";
echo "<a href=login.php> Back</a>";
} else {
	if($hasil['level'] == 1){
			$_SESSION['admin']=$username;
			echo '<script language="javascript">alert("Anda berhasil Login Admin !!!"); document.location="admin/index.php";</script>';
		}else{
			$_SESSION['guest']=$username;
			echo '<script language="javascript">alert("Anda berhasil Login !!!"); document.location="user/index.php";</script>';
		}

}
}
?>
	</font>
</body>
</html>