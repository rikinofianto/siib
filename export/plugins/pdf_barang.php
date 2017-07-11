<?php
//error_reporting(0);
session_start();

@$user = $_SESSION['username'];
@$pass = $_SESSION['password'];
include"../../koneksi.php";
include "../../fungsi_indotgl.php";
$sql = mysql_query("SELECT * FROM surat_keluar order by tgl_keluar");
?>
<p align="center" style="font-size:25px">Daftar Surat Keluar PC IPNU Kabupaten Bantul Periode 2015 - 2017</p>
<table border="1" cellpadding="0" cellspacing="0" align="center">
  <tr align="center">
    <td width="36" bgcolor="#99FF66">No</td>
    <td width="145" bgcolor="#99FF66">Tanggal Keluar</td>
    <td width="218" bgcolor="#99FF66">No. surat</td>
    <td width="294" bgcolor="#99FF66">Hal</td>
    <td width="192" bgcolor="#99FF66">Tujuan</td>
  </tr>
  <?php
  $no=1;
  while($data=mysql_fetch_array($sql))
  {
	   $get_thn1=substr("$data[tgl_keluar]",0,4);
		$get_bln1=substr("$data[tgl_keluar]",5,2);
		$get_tgl1=substr("$data[tgl_keluar]",8,2);
		$masuk = $get_tgl1.'-'.$get_bln1.'-'.$get_thn1; 
		$tgl=tgl_indo($data['tgl_keluar']);
  ?>
  <tr align="center">
    <td align="center"><?php echo $no ;?></td>
    <td align="left"><?php echo "$tgl";?></td>
    <td><?php echo $data['no_surat'];?></td>
    <td><?php echo $data['hal'];?></td>
    <td><?php echo $data['tujuan'];?></td>
   </tr>
    <div style="clear:both;"></div>
  <?php
  $no++;
  }
  ?>
</table> 
<p style="font-size:9px"><i>Bila ada kesalahan penulisan surat keluar di atas mohon segera konfirmasi Rekan defik (085643522082)/ email :defikardiyanto@gmail.com / pc.ip.ippnu.bantul@gmail.com</i><br>
<?php
include "../../koneksi.php";
$sql=mysql_query("select * from admin where username='$_SESSION[username]'");
$row=mysql_fetch_array($sql);
?>
<table border="0" style="font-size:9px">
<tr>
<td>Tanggal Download</td>
<td>:</td>
<td><?php include "../../tanggal.php";
   
?></td>
</tr>
<tr>
<td>Admin</td>
<td>:</td>
<td><?=$row['nama'];?></td>
</tr>
</table>