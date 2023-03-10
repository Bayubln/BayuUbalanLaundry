<?php
session_start();
include_once '../template/header.php';
include_once '../template/sidebar.php';
include_once '../template/topbar.php';
?>

<?php

include_once '../../controllers/c_outlet.php';

$outlet = new c_outlet();
?>

<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3> Tambah Produk </small></h3>
			</div>

			<div class="title_right">
			</div>
		</div>

		<div class="clearfix"></div>

		<!-- start form  -->
		<div class="row">
			<div class="col-md-12 col-sm-12 ">
				<div class="x_panel">
					<div class="x_title">
						<h2>Tambah produk</h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<br />
						<form action="../../routers/r_produk.php?aksi=tambah" method="POST" data-parsley-validate class="form-horizontal form-label-left">

							<div class="item form-group">
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="id" name="id" class="form-control " hidden>
								</div>
							</div>

							<div class="item form-group">
								<label for="role" class="col-form-label col-md-3 col-sm-3 label-align">Jenis</label>
								<div class="col-md-6 col-sm-6 ">
									<select id="role" class="form-control" name="jenis">
										<option>Choose option</option>
										<option value="cuci_kiloan">CuciKiloan</option>
										<option value="cuci_express">cuci_express</option>
										<option value="selimut">Selimut</option>
										<option value="bed_cover">BedCover</option>
										<option value="dll">dll</option>
									</select>
								</div>
							</div>
							
							<div class="item form-group">
								<label for="nama_paket" class="col-form-label col-md-3 col-sm-3 label-align">Nama Paket</label>
								<div class="col-md-6 col-sm-6 ">
									<input id="nama_paket" required="required" class="form-control" type="text" name="nama_paket">
								</div>
							</div>

                            <div class="item form-group">
								<label for="harga" class="col-form-label col-md-3 col-sm-3 label-align">Harga</label>
								<div class="col-md-6 col-sm-6 ">
									<input id="harga" required="required" class="form-control" type="text" name="harga">
								</div>
							</div>
							
							<div class="item form-group">
								<label for="outlet" class="col-form-label col-md-3 col-sm-3 label-align">Outlet</label>
								<div class="col-md-6 col-sm-6 ">
									<select id="outlet" class="form-control" name="id_outlet">
										<option>Choose option</option>

										<?php foreach ($outlet->tampil() as $o) { ?>
												<option value="<?= $o->id ?>"><?= $o->nama ?></option>
										<?php } ?>

									</select>
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