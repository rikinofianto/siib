<?php 
include "koneksi.php";
$ruang = mysql_real_escape_string($_POST['ruang']);
$nama_barang=mysql_real_escape_string($_POST['nama_barang']);
$kd_barang=mysql_real_escape_string($_POST['kd_barang']);
$register=mysql_real_escape_string($_POST['register']);
$tipe_merk=mysql_real_escape_string($_POST['tipe_merk']);
$no_seri_pabrik=mysql_real_escape_string($_POST['no_seri_pabrik']);
$ukuran=mysql_real_escape_string($_POST['ukuran']);
$bahan=mysql_real_escape_string($_POST['bahan']);
$tahun=mysql_real_escape_string($_POST['tahun']);
$asal_usul=mysql_real_escape_string($_POST['asal_usul']);
$unit=mysql_real_escape_string($_POST['unit']);
$harga=mysql_real_escape_string($_POST['harga']);
$keadaan_barang=mysql_real_escape_string($_POST['keadaan_barang']);
$ket=mysql_real_escape_string($_POST['ket']);
$id = $_POST['id_barang'];

$q="UPDATE barang 
	SET ruang = '$ruang',
		nama_barang = '$nama_barang',
		kd_barang = '$kd_barang',
		register = '$register',
		tipe_merk = '$tipe_merk',
		no_seri_pabrik = '$no_seri_pabrik',
		ukuran = '$ukuran',
		bahan = '$bahan',
		tahun = '$tahun',
		asal_usul = '$asal_usul',
		unit = '$unit',
		harga = '$harga',
		keadaan_barang = '$keadaan_barang',
		ket = '$ket' WHERE id = '$id'";

$x =mysql_query($q)or die (mysql_error());
if ($x) {
	exit("<script>window.alert('Edit Berhasil');window.location='index.php?act=barang';</script>");
}
?>
