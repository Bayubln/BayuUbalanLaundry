<?php 
session_start();
include_once '../template/header.php'; 
include_once '../template/sidebar.php'; 
include_once '../template/topbar.php'; 
?>
<?php 
include_once '../../controllers/c_outlet.php';
include_once '../../controllers/c_produk.php';

$outlet = new c_outlet();
$produk = new c_produk();
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Daftar Paket</h3>
              </div>

              <div class="title_right">
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar Paket </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Outlet</th>
                          <th>Nama Paket</th>
                          <th>Harga</th>
                          <th><center>Aksi</center></th>
                        </tr>
                      </thead>
                      <tbody>
                      
                      <?php 
                      $no = 1;
                      foreach ($produk->tampil() as $p) {
                      ?>
                        <tr>
                          <th scope="row"><?= $no++  ?></th>
                          <td><?= $p->outlet_nama  ?></td>
                          <td><?= $p->nama_paket  ?></td>
                          <td><?= $p->harga  ?></td>
                          <td>
                            <center>
                            <a href="v_edit_produk.php?id=<?= $p->id ?>"><button type="button" class="btn btn-round btn-primary">Edit</button></a>
                            
                            <a onclick="return confirm('Apakah yakin data akan di hapus?')" href="../../routers/r_produk.php?id=<?= $p->id ?>&aksi=hapus"><button type="button" name="hapus" class="btn btn-round btn-danger">Hapus</button></a>
                            </center>
                          </td>
                        </tr>
                      <?php } ?>

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
        <!-- /page content -->

<?php include_once '../template/footer.php';?>
