<?php
 session_start();
if(!isset($_SESSION['username'])) {
header('location:homelogin.html'); }
else { $username = $_SESSION['username']; }
require_once("koneksi.php");
$query = mysql_query("SELECT * FROM login WHERE username = '$username'");
$hasil = mysql_fetch_array($query);
?>
<html>
<head>
<title>selamat datang</title>
</head>
<body>
<center>
<?php echo "<h2>Selamat Datang, $username</h2>"; 
?>
<a href="logout.php"><b>Logout</b></a>
</center>
</body>
</html>