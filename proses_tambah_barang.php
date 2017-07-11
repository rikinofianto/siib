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

 if(empty($ruang)or empty($nama_barang)or empty($kd_barang)or empty($register)or empty($tipe_merk)or empty($ukuran)or empty($bahan)or empty($tahun)or empty($asal_usul)or empty($unit)or empty($harga)or empty($keadaan_barang)){
	exit("<script>window.alert('Form Masih kosong, Silahkan anda Mengklik OK');window.history.back();</script>");
	} else { 
	
	include "koneksi.php";
$q="INSERT INTO `barang` VALUES ('',
	'$ruang',
	'$nama_barang',
	'$kd_barang',
	'$register',
	'$tipe_merk',
	'$no_seri_pabrik',
	'$ukuran',
	'$bahan',
	'$tahun',
	'$asal_usul',
	'$unit',
	'$harga',
	'$keadaan_barang',
	'$ket')";
$eksekusi=mysql_query($q) or die ("".mysql_error());
	if ($eksekusi){
		echo "<script>window.alert('Tambah Data Barang Berhasil');window.location='index.php?act=barang';</script>";
	}else {
	exit ("<script>window.alert('query gagal');window.history.back();</script>");
	}
}

?>