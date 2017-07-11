<?php
$user=$_POST['username'];
$pass= md5($_POST['password']);

//koneksi
include "koneksi.php";

if(empty($user) or empty($pass)){
	exit("<script>window.alert('Form Tidak Boleh Kosong');window.history.back();</script>");
}else{
	//cek data
	
	$q = "SELECT * FROM `admin` WHERE username='$user' and password= '$pass'";
$x = mysql_query($q);
$jml_data = mysql_num_rows($x);

if ($jml_data>0) {
session_start();
$_SESSION['username'] =$user;
$_SESSION['password'] =$pass;
exit ("<script>window.location='index.php';</script>");
} else {
exit ("<script>window.alert('Anda Gagal Login !');window.history.back();</script>");
}
}
?>
