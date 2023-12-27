<?php 
session_start();
if(isset($_SESSION['username'])) {
header('location:login.php'); }

require_once("koneksi.php");
?>
<html>
<head>
<title>selamat datang</title>
<style type="text/css">
    .login {
        margin: 150px auto;
        width: 500px;
        padding: 10px;
        border: 0px solid #ccc;
        background: 0;
    }
    input[type=text], input[type=password] {
        margin: 5px auto;
        width: 100%;
        padding: 10px;
    }
    input[type=submit] {
        margin 5px auto;
        float: right;
        padding: 5px;
        width: 90px;
        border: 1px solid #fff;
        color: #fff;
        background: red;
        cursor: pointer;
    }
	input[type=reset] {
        margin 5px auto;
        float: right;
        padding: 5px;
        width: 90px;
        border: 1px solid #fff;
        color: #fff;
        background: red;
        cursor: pointer;
    }
	button {
        margin 5px auto;
        float: botom;
        padding: 5px;
        width: 80px;
        border: 1px solid #fff;
        color: #fff;
        background: blue;
        cursor: pointer;
    }
</style>
</head>
<body background="dasarweb.jpg">
<center>

<div class="login">
<form action="proseslogin.php" method="post">
<font size="20" face="masque">DUNIA MATA PELAJARAN</font><h1><font face="gunplay">Masuk</font></h1>
<input name="username" type="text" placeholder="nama pengguna"/>
<input name="password" type="password" placeholder="Password"/>
<input type="submit" value="Login" /> 
<input type="reset" value="Batal" />
Belum Punya akun ? <a href="daftar.php" >Daftar</a>
</form>
</div>
</form>
</body>
</html>