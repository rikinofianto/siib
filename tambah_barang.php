<?php 
include "koneksi.php";
;?>
<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
				<div class="panel-heading">Halaman Tambah Barang</div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<div class="col-md-6">
							<form role="form" action="proses_tambah_barang.php" method="post">
								<div class="form-group">Ruang
								 <select class="form-control" name="ruang">
								 	<?php
								  $q = "SELECT * FROM ruang";
								  $e = mysql_query($q);
								  while ($d=mysql_fetch_array($e)) {
								  echo "<option value='$d[id]'> $d[nama_ruang]</option>";  
								  }
								  	?>	
								  </select>
								</div>
                                <div class="form-group">Nama Barang
								  <input class="form-control" name="nama_barang">
								</div>
                                <div class="form-group">Kode Barang
								  <input class="form-control" name="kd_barang">
								</div>
                                <div class="form-group">Register
								  <input class="form-control" name="register">
								</div>
                                <div class="form-group">Tipe / Merk
								  <input class="form-control" name="tipe_merk">
								</div>
                                <div class="form-group">Nomor Seri Pabrik
								  <input class="form-control" name="no_seri_pabrik">
							  </div>
                                <div class="form-group">Ukuran
                                  <input class="form-control" name="ukuran">
							  </div>
                                <div class="form-group">Bahan
								  <input class="form-control" name="bahan">
								</div>
                                <div class="form-group">Tahun
								  <input class="form-control" name="tahun">
								</div>
                                <div class="form-group">Asal Usul Barang
								  <input class="form-control" name="asal_usul">
								</div>
                                <div class="form-group">Unit
								  <input class="form-control" name="unit">
								</div>
                                <div class="form-group">Harga
								  <input class="form-control" name="harga">
								</div>
                                <div class="form-group">Keadaan Barang
                                  <select name="keadaan_barang" class="form-control">
                                    <option value="B">B</option>
                                    <option value="RR">RR</option>
                                    <option value="rb">RB</option>
                                    </select>
                                </div>
                                 <div class="form-group">Keterangan
								  <input class="form-control" name="ket">
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
