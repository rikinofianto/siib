 <?php
include "koneksi.php";
$id=$_GET['id'];

$q ="SELECT * FROM admin WHERE id='$id'";

$exe=mysql_query($q);
$data=mysql_fetch_array($exe);
if (!empty($_POST['User'])) {
  $post = $_POST['User'];
  if ($post['password'] == $data['password']) {
    $password = $data['password'];
  } else {
    $password = md5($post['password']);
  }
  $sql = "UPDATE admin SET nama = '{$post['nama']}', username = '{$post['username']}', password = '{$password}' WHERE id = '{$id}'";
  $query = mysql_query($sql);
  if ($query) {
    exit("<script>window.alert('Data yang dipilih telah diupdate');window.location='index.php?act=user';</script>");
  }
}
?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
        <div class="panel-heading">User Admin</div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <div class="col-md-6">
                    <form role="form" action="#" method="post">
                        <div class="form-group">Nama
                          <input class="form-control" name="User[nama]" value="<?php echo $data['nama'];?>">
                        </div>
                        <div class="form-group">Username
                          <input class="form-control" name="User[username]" value="<?php echo $data['username'];?>">
                        </div>
                        <div class="form-group">Password
                          <input class="form-control" type="password" name="User[password]" value="<?php echo $data['password'];?>">
                        </div>
                        <input type="submit" name="submit" value="Simpan" class="btn btn-primary"/>
                    <input type="reset" name="reset" value="Clear" class="btn btn-primary"/>
                      </form>
                        </div>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->
