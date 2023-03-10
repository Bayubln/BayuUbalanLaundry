<?php
session_start();
include_once '../template/header.php';
include_once '../template/sidebar.php';
include_once '../template/topbar.php';
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3> Registrasi Pelanggan </small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <!-- start form  -->
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Registrasi Pelanggan</h2>
                
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="../../routers/r_pelanggan.php?aksi=tambah" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="id" name="id" class="form-control " hidden>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama"> Nama <span class="required"></span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="nama" name="nama" required="required" class="form-control">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label for="alamat" class="col-form-label col-md-3 col-sm-3 label-align"> Alamat </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="alamat" required="required" class="form-control" type="alamat" name="alamat">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label for="jk" class="col-form-label col-md-3 col-sm-3 label-align"> Jenis Kelamin </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select id="jk" class="form-control" name="jk">
                                        <option>Choose option</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label for="tlp" class="col-form-label col-md-3 col-sm-3 label-align"> Telepon </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="tlp" required="required" class="form-control" type="text" name="tlp">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button class="btn btn-primary" type="submit" name="tambah">Save</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end form  -->

    </div>
</div>
<!-- /page content -->


<?php include_once '../template/footer.php'; ?>