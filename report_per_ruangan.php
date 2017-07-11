<style type="text/css">
.form-kontrol {
	width:200px;
	height:34px;
	padding:6px 12px;
	font-size:12px;
	line-height:1.42857;
	color:#555;
	background-color:#fff;
	background-image:none;
	border:1px solid #ccc;
	border-radius:4px;
	-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
	box-shadow:inset 0 1px 1px rgba(0,0,0,.075);
	-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	line-height: normal;
}
</style>
<script type="text/javascript">
function confirmation(delUrl) {
	var answer = confirm("Apakah Anda yakin akan menghapus data Ini ?");
	if (answer) {
		window.location = delUrl;
	}
}
</script>
<?php
/*Clean Code*/
include "koneksi.php";
$ruang = $_GET['ruang'] ? $_GET['ruang'] : 9;
$batas = 10;
if (empty($_GET['hal'])) {
	$hal = 1;
	$posisi = 0;
} else {
	$h sisi=($hal-1)*$batas;
}

$q = "SELECT * FROM barang,ruang WHERE
barang.id = ruang.id AND ruang.`id` = $ruang LIMIT $posisi,$batas";
$ekse = mysql_query($q);
$jml = mysql_num_rows($ekse);
$jmlhal = ceil($jml/$batas);
?>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Halaman Barang<br></div>

				<div class="canvas-wrapper">
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-body">
									<a href="index.php?act=tambah_barang" >
										<button type="submit" class="btn btn-primary">Tambah Barang</button>
									</a>
									<div class="pull-right search">
										<input type="text" placeholder="Cari Barang" class="form-kontrol">
										<button type="submit" class="btn btn-default">Cari</button>
									</div>
									<br></br>
									<table cellpadding="0" cellspacing="0" border="1">
										<tr align="center" style="font-weight:bold">
											<td width="20" rowspan="2">No</td>
											<td width="136" rowspan="2">Nama/ Jenis Barang</td>
											<td colspan="2">Nomor</td>
											<td width="65" rowspan="2">Merk/Tipe</td>
											<td width="58" rowspan="2">No. Seri Pabrik</td>
											<td width="46" rowspan="2">Ukuran</td>
											<td width="56" rowspan="2">Bahan</td>
											<td width="57" rowspan="2">Tahun Buat/ Beli</td>
											<td width="63" rowspan="2">Asal</td>
											<td colspan="2">Jml Satuan</td>
											<td width="86" rowspan="2">Harga Total</td>
											<td width="100" rowspan="2">Keadaan Barang (B/RR/RB)</td>
											<td width="29" rowspan="2">Ket</td>
											<td width="29" rowspan="2">Action</td>
											</tr>
											<tr align="center" style="font-weight:bold">
											<td width="116" align="center">Kode Br</td>
											<td width="101">Register</td>
											<td width="31">Unit</td>
											<td width="87">Harga(Rp)</td>
										</tr>
										<tr align="center" bgcolor="#FFCCFF">
											<td>1</td>
											<td>2</td>
											<td>3</td>
											<td>4</td>
											<td>5</td>
											<td>6</td>
											<td>7</td>
											<td>8</td>
											<td>9</td>
											<td>10</td>
											<td>11</td>
											<td>12</td>
											<td>13</td>
											<td>14</td>
											<td>15</td>
											<td>&nbsp;</td>
										</tr>
										<?php
										$no=1+$posisi;
										while($data=mysql_fetch_array($ekse)){
										?>
										<tr>
											<td align="center"><?php echo $no ;?></td>
											<td><?php echo $data['nama_barang'];?></td>
											<td align="center"><?php echo $data['kd_barang'];?></td>
											<td align="center"><?php echo $data['register'];?></td>
											<td align="center"><?php echo $data['tipe_merk'];?></td>
											<td><?php echo $data['no_seri_pabrik'];?></td>
											<td><?php echo $data['ukuran'];?></td>
											<td align="center"><?php echo $data['bahan'];?></td>
											<td align="center"><?php echo $data['tahun'];?></td>
											<td align="center"><?php echo $data['asal_usul'];?></td>
											<td align="center"><?php echo $data['unit'];?></td>
											<td align="right"><?php echo $data['harga'];?></td>
											<td align="right"><?php echo $data['harga']*$data['unit'];?></td>
											<td align="center"><?php echo $data['keadaan_barang'];?></td>
											<td><?php echo $data['ket'];?></td>
											<td>
											<a href="index.php?act=edit_barang&id=<?php echo $data['id'];?>">
											<button class="btn btn-sm btn-primary">
											<i class="glyphicon glyphicon-pencil"></i>
											Edit
											</button>
											</a>
											<a href="#" onclick=confirmation("hapus_barang.php?id=<?php echo $data['id']; ?>")>                
											<button class="btn btn-sm btn-danger">
											<i class="glyphicon glyphicon-trash"></i>
											Delete
											</button></a>
											</td>
										</tr>
										<?php
											$no++;
										}
										?>
									</table>
									<br>
									<?php
									$q="select * from barang";
									$x=mysql_query($q);
									$jml=mysql_num_rows($x);
									$jmlhal=ceil($jml/$batas);?>
									<div class="fixed-table-pagination">
										<div class="pagination">
											<ul class="pagination">
												<?php
												for ($i=1;$i<=$jmlhal;$i++) {
													if($i!=$hal) {
														echo "<li><a href=$_SERVER[PHP_SELF]?act=barang&hal=$i>$i</a></li>";
													} else {
														echo "<li class='active'><a href='javascript:void(0)'>$i</a></li>";
													}
												}?>
											</ul>
										</div>
									</div>
									<?php
									echo "<br>Jumlah : <b><i>$jml</i></b> Barang";
									?>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
</div>
<!--/.row-->