<?php
include "koneksi.php";
$q="SELECT * FROM admin";
$ekse=mysql_query($q);
$jml=mysql_num_rows($ekse);
?>
<div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Halaman User</div>
          <div class="panel-body">
            <div class="canvas-wrapper">
              <table width="935" border="1" cellpadding="0" cellspacing="0">
  <tr align="center" style="font-weight:bold; font-size:14px" bgcolor="#CCFFCC">
    <td width="31" height="33">No</td>
    <td width="234">Nama</td>
    <td width="206">User Name</td>
    <td width="245">Password</td>
  </tr>
  <tr align="center">
  <?php
                    $no=1;
  while($data=mysql_fetch_array($ekse)){
  ?>
    <td><?php echo $no ;?></td>
    <td><?php echo $data['nama'];?></td>
    <td><?php echo $data['username'];?></td>
    <td><a href="index.php?act=reset&id=<?=$data['id'];?>">Ubah Password</a></td>
  </tr>
  <?php
                   $no++;
  }
  ?>
</table>

            </div>
          </div>
        </div>
      </div>
    </div><!--/.row-->