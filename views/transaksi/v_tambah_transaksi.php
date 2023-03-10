<?php
session_start();
include_once '../template/header.php';
include_once '../template/sidebar.php';
include_once '../template/topbar.php';
?>

<?php

include_once '../../controllers/c_transaksi.php';
include_once '../../controllers/c_produk.php';
include_once '../../controllers/c_pelanggan.php';

$tr = new c_transaksi();
$paket = new c_produk();
$pelanggan = new c_pelanggan();


?>

<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3> Tambah Transaksi </small></h3>
			</div>

			<div class="title_right">
				<div class="col-md-5 col-sm-5   form-group pull-right top_search">
				</div>
			</div>
		</div>

		<div class="clearfix"></div>

		<!-- start form  -->
		<div class="row">
			<div class="col-md-12 col-sm-12 ">
				<div class="x_panel">
					<div class="x_title">
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<br />
						<form action="../../routers/r_transaksi.php?aksi=tambah" method="POST" data-parsley-validate class="form-horizontal form-label-left">

							<div class="item form-group">
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="id" name="id" class="form-control " hidden>
								</div>
							</div>

							<div class="item form-group">
								<label for="outlet" class="col-form-label col-md-3 col-sm-3 label-align">Kode Invoice</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="id" name="kode_invoice" class="form-control " value="<?= $tr->invoice() ?>" readonly>
								</div>
							</div>

							<div class="item form-group">
								<!-- <label class="col-form-label col-md-3 col-sm-3 label-align" for="id_outlet"> Outlet <span class="required"></span> -->
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="id_outlet" name="id_outlet" required="required" class="form-control" value="<?php echo $_SESSION['data']['id_outlet'] ?>" hidden>
								</div>
							</div>

							<div class="item form-group">
								<label for="outlet" class="col-form-label col-md-3 col-sm-3 label-align">Member</label>
								<div class="col-md-6 col-sm-6 ">
									<select id="outlet" class="form-control" name="id_member">
										<option>Choose option</option>
										<?php foreach ($pelanggan->tampil() as $o) { ?>
											<option value="<?= $o->id ?>"><?= $o->nama ?></option>
										<?php } ?>
									</select>
								</div>
							</div>

							<!-- <div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal <span class="required"></span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input id="birthday" class="date-picker form-control" name="tanggal" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
									<script>
										function timeFunctionLong(input) {
											setTimeout(function() {
												input.type = 'text';
											}, 60000);
										}
									</script>
								</div>
							</div> -->

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="Tanggal"> Tanggal <span></span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="tanggal" name="tanggal" class="form-control" value="<?= date('Y-m-d') ?>" readonly>
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align">Batas Waktu <span class="required"></span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input id="birthday" class="date-picker form-control" name="batas_waktu" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
									<script>
										function timeFunctionLong(input) {
											setTimeout(function() {
												input.type = 'text';
											}, 60000);
										}
									</script>
								</div>
							</div>

							<!-- <div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="biaya_tambahan"> Biaya Tambahan <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="biaya_tambahan" name="biaya_tambahan" required="required" class="form-control">
								</div>
							</div>

                            <div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="diskon"> Diskon <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="diskon" name="diskon" required="required" class="form-control">
								</div>
							</div>

                            <div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="pajak"> Pajak <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="pajak" name="pajak" required="required" class="form-control">
								</div>
							</div> -->

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="status"> Status <span class="required"></span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="status" name="status" required="required" class="form-control" value="baru" placeholder="Baru" readonly>
								</div>
							</div>
							<!-- <div class="item form-group">
								<label for="dibayar" class="col-form-label col-md-3 col-sm-3 label-align">Bayar</label>
								<div class="col-md-6 col-sm-6 ">
									<select id="dibayar" class="form-control" name="dibayar">
										<option>Choose option</option>
										<option value="dibayar">Di Bayar</option>
										<option value="belum_dibayar">Belum Di Bayar</option>
									</select>
								</div>
							</div> -->

							<div class="item form-group">
								<!-- <label class="col-form-label col-md-3 col-sm-3 label-align" for="id_user"> User <span class="required"></span> -->
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="dibayar" name="dibayar" class="form-control" value="belum_dibayar" hidden>
								</div>
							</div>

							<div class="item form-group">
								<!-- <label class="col-form-label col-md-3 col-sm-3 label-align" for="id_user"> User <span class="required"></span> -->
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="id_user" name="id_user" class="form-control" value="<?php echo $_SESSION['data']['id'] ?>" hidden>
								</div>
							</div>

							<div class="item form-group">
								<label for="outlet" class="col-form-label col-md-3 col-sm-3 label-align">Paket</label>
								<div class="col-md-6 col-sm-6 ">
									<select id="outlet" class="form-control" name="id_paket">
										<option>Choose option</option>

										<?php foreach ($paket->tampil() as $o) { ?>
												<option value="<?= $o->id ?>"><?= $o->nama_paket ?></option>
										<?php } ?>

									</select>
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="qty"> Qty / kg<span class="required"></span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="qty" name="qty" required="required" class="form-control">
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="keterangan"> Keterangan <span class="required"></span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="keterangan" name="keterangan" required="required" class="form-control">
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