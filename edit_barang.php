 <?php
include "koneksi.php";
$kdbarang = $_GET['id'];

$q ="SELECT * FROM barang WHERE id='$kdbarang'";

$exe=mysql_query($q);
$data=mysql_fetch_array($exe);
$keadaan =array('B' => 'Baik', 'RR' => 'Rusak Ringan', 'RB' => 'Rusak Berat');
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
        <div class="panel-heading">Halaman Edit Barang</div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <div class="col-md-6">
                    <form role="form" action="proses_edit_barang.php" method="post">
                        <input type="hidden" name="id_barang" value="<?=$kdbarang;?>">
                        <div class="form-group">Ruang
                         <select class="form-control" name="ruang">
                            <?php
                                $q = "SELECT * FROM ruang";
                                $e = mysql_query($q);
                                while ($d=mysql_fetch_array($e)) {
                                    $selected = "";
                                    if ($d['id'] == $data['ruang']) {
                                        $selected = "selected='selected'";
                                    }
                                    echo "<option $selected value='$d[id]'> $d[nama_ruang]</option>";
                                }
                            ?>
                          </select>
                        </div>
                        <div class="form-group">Nama Barang
                          <input class="form-control" name="nama_barang" value="<?php echo $data['nama_barang'];?>">
                        </div>
                        <div class="form-group">Kode Barang
                          <input class="form-control" name="kd_barang" value="<?php echo $data['kd_barang'];?>">
                        </div>
                        <div class="form-group">Register
                          <input class="form-control" name="register" value="<?php echo $data['register'];?>">
                        </div>
                        <div class="form-group">Tipe / Merk
                          <input class="form-control" name="tipe_merk" value="<?php echo $data['tipe_merk'];?>">
                        </div>
                        <div class="form-group">Nomor Seri Pabrik
                          <input class="form-control" name="no_seri_pabrik" value="<?php echo $data['no_seri_pabrik'];?>">
                      </div>
                        <div class="form-group">Ukuran
                          <input class="form-control" name="ukuran" value="<?php echo $data['ukuran'];?>">
                      </div>
                        <div class="form-group">Bahan
                          <input class="form-control" name="bahan" value="<?php echo $data['bahan'];?>">
                        </div>
                        <div class="form-group">Tahun
                          <input class="form-control" name="tahun" value="<?php echo $data['tahun'];?>">
                        </div>
                        <div class="form-group">Asal Usul Barang
                          <input class="form-control" name="asal_usul" value="<?php echo $data['asal_usul'];?>">
                        </div>
                        <div class="form-group">Unit
                          <input class="form-control" name="unit" value="<?php echo $data['unit'];?>">
                        </div>
                        <div class="form-group">Harga
                          <input class="form-control" name="harga" value="<?php echo $data['harga'];?>">
                        </div>
                        <div class="form-group">Keadaan Barang
                          <select name="keadaan_barang" class="form-control">
                            <?php
                            foreach ($keadaan as $key => $value) {
                                $selected = '';
                                if ($key == $data['keadaan_barang']) {
                                    $selected = "selected='selected'";
                                }
                                echo "<option $selected value='$key'>$value</option>";
                            }
                            ?>
                            </select>
                        </div>
                         <div class="form-group">Keterangan
                          <input class="form-control" name="ket" value="<?php echo $data['ket'];?>">
                        </div>
                        <input type="submit" name="submit" value="Simpan" class="btn btn-primary"/>
                    <input type="reset"name="reset" value="Clear" class="btn btn-primary"/>
                      </form>
                        </div>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->
