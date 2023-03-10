<?php
session_start();
include_once '../template/header.php';
include_once '../template/sidebar.php';
include_once '../template/topbar.php';
?>

<?php

include_once '../../controllers/c_outlet.php';
include_once '../../controllers/c_pengguna.php';

$outlet = new c_outlet();
$pengguna = new c_pengguna();
?>

<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3> Edit Pengguna </small></h3>
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
						<h2>Form Edit </h2>
					
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<br />
						<form action="../../routers/r_pengguna.php?aksi=update" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                        <?php 
                            foreach ($pengguna->edit($_GET['id']) as $p) {
                        ?>
							<div class="item form-group">
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="id" name="id" class="form-control " hidden value='<?= $p->id ?>'>
								</div>
							</div>

							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="username"> Username <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="username" name="username" required="required" class="form-control" value='<?= $p->username ?>'>
								</div>
							</div>
							
							<div class="item form-group">
								<label for="password" class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
								<div class="col-md-6 col-sm-6 ">
									<input id="password" required="required" class="form-control" type="password" name="password">
								</div>
							</div>

							<div class="item form-group">
								<label for="role" class="col-form-label col-md-3 col-sm-3 label-align">Role</label>
								<div class="col-md-6 col-sm-6 ">
									<select id="role" class="form-control" name="role">
										<option value='<?= $p->role ?>'><?= $p->role ?></option>
										<option value="admin">admin</option>
										<option value="kasir">kasir</option>
										<option value="owner">owner</option>
									</select>
								</div>
							</div>

                            <?php } ?>

                            <div class="item form-group">
								<label for="outlet" class="col-form-label col-md-3 col-sm-3 label-align">Outlet</label>
								<div class="col-md-6 col-sm-6 ">
									<select id="outlet" class="form-control" name="id_outlet">
										<option value='<?= $p->outlet_id ?>'><?= $p->outlet_nama ?></option>

										<?php foreach ($outlet->tampil() as $o) { ?>
												<option value="<?= $o->id ?>"><?= $o->nama ?></option>
										<?php } ?>

									</select>
								</div>
							</div>
							
							


							<div class="ln_solid"></div>
							<div class="item form-group">
								<div class="col-md-6 col-sm-6 offset-md-3">
									<button class="btn btn-primary" type="submit" name="update">Save</button>
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