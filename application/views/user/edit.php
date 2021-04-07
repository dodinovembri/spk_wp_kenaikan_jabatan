<div class="wrapper">

	<?php $this->load->view('components/header'); ?>
	<?php $this->load->view('components/sidebar'); ?>

	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1><small></small></h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('/') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="<?php echo base_url('user') ?>"> User</a></li>
				<li class="active">Edit Data</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">

					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Edit Data</h3>
						</div>

						<!-- /.box-header -->
						<!-- form start -->
						<form role="form" action="<?php echo base_url('user/update/'); echo $user->id; ?>" method="post">
							<div class="box-body">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" class="form-control" id="email" placeholder="Masukkan email" value="<?php echo $user->email; ?>" required>
								</div>
								<div class="form-group">
								<label for="role_id">Role_id</label>
									<div class="radio">
										<label>
										<input type="radio" name="role_id" id="role_id1" value="0" <?php if ($user->role_id == 0) {echo "checked";} ?> required> Administrator <br>
                     					<input type="radio" name="role_id" id="role_id1" value="1" <?php if ($user->role_id == 1) {echo "checked";} ?> required> Leader <br>
                     					<input type="radio" name="role_id" id="role_id1" value="2" <?php if ($user->role_id == 2) {echo "checked";} ?> required> Interviewer <br>
                      					<input type="radio" name="role_id" id="role_id1" value="3" <?php if ($user->role_id == 3) {echo "checked";} ?> required> director <br>
                      					<input type="radio" name="role_id" id="role_id1" value="4" <?php if ($user->role_id == 4) {echo "checked";} ?> required> employees

										</label>
									</div>
								</div>
								
								<!-- /.box-body -->

								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Simpan</button>
									<a href="<?php echo base_url('user') ?>"><button type="button" class="btn btn-danger">Batal</button></a>
								</div>
						</form>

					</div>
				</div>
		</section>


		<!-- /.content-wrapper -->
	</div>
	<?php $this->load->view('components/footer'); ?>

</div>