<html>
<head>
	<title>MATA PELAJARAN</title></head>
<body background="dasarweb.jpg">
<center>

<font size=15>
<br><br><br><br><br>
<?php require_once("koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM login WHERE username = '$username'");
if(mysql_num_rows($cekuser) <> 0) {
echo "Username Sudah Terdaftar!";
echo "<a href=daftar.php> Back</a>";
} else {
if(!$username || !$password) {
echo "Masih ada data yang kosong!";
echo "<a href=daftar.php> Back</a>";
} else {
$simpan = mysql_query("INSERT INTO login(username, password) VALUES('$username','$password')");
if($simpan) {
echo "Pendaftaran Sukses, Silahkan <a href=login.php>Login</a>";
} else {
echo "Proses Gagal!";
}
}
}
?>
</font>
</body>
</html>