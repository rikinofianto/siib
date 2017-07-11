<?php
session_start();

@$user = $_SESSION['user'];
@$pass = $_SESSION['pass'];

if (empty($user) || empty($pass)) {
	exit("<script>window.location='login.php';</script>");
}
?>