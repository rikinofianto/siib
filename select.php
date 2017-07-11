<?php
if(empty($_GET['act']))
{ include "home.php";
}else{
	switch ($_GET['act'])
{
	case ('home') : include ('home.php');
	break;
	case ('profil') : include ('profil.php');
	break;
	case ('peminjam') : include ('peminjam.php');
	break;
	case ('barang') : include ('barang.php');
	break;
	case ('utuh') : include ('utuh.php');
	break;
	case ('rusak') : include ('rusak.php');
	break;
	case ('tambah_barang') : include ('tambah_barang.php');
	break;
	case ('edit_barang') : include ('edit_barang.php');
	break;
	case ('user') : include ('user.php');
	break;
	case ('reset') : include ('reset_password.php');
	break;
	default: "home.php";
	break;
	}
}
?>