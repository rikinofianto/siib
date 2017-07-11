<?php
session_start();
session_destroy();
exit("<script>window.alert('Anda Sukses Logout');window.location='login.php';</script>");
?>