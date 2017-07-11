<?php
$kdbarang =$_GET['id'];
include "koneksi.php";
$q ="DELETE FROM barang WHERE id ='$kdbarang'";
$x = mysql_query($q);
if ($x) {
    exit("<script>window.alert('Data yang dipilih telah terhapus');window.location='index.php?act=barang';</script>");
}
?>