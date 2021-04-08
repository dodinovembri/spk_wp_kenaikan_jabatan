<div class="wrapper">

	<?php $this->load->view('components/header'); ?>
	<?php $this->load->view('components/sidebar'); ?>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1><small></small></h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('/') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">Profile</li>
			</ol>
		</section>

		<section class="content">

			<div class="row">
				<!-- /.col -->
				<div class="col-md-12">
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#activity" data-toggle="tab">Informasi</a></li>
							<li><a href="#settings" data-toggle="tab">Settings</a></li>
						</ul>
						<div class="tab-content">
							<div class="active tab-pane" id="activity">
								<?php if ($this->session->flashdata('success')) { ?>
									<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										<?php echo $this->session->flashdata('success'); ?>
									</div>
								<?php } elseif ($this->session->flashdata('warning')) { ?>
									<div class="alert alert-warning" role="alert">
										<?php echo $this->session->flashdata('warning'); ?>
									</div>
								<?php } ?>
								<form class="form-horizontal" action="<?php echo base_url('profile/store/'); echo $employee->id; ?>" enctype="multipart/form-data" method="post">
									<div class="form-group">
										<label for="inputName" class="col-sm-2 control-label">NIK</label>

										<div class="col-sm-10">
										<input type="text" name="nik" class="form-control" id="nik" placeholder="Masukkan NIK" value="<?php echo $employee->nik; ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail" class="col-sm-2 control-label">Nama</label>

										<div class="col-sm-10">
										<input type="text" name="name" class="form-control" id="name" value="<?php echo $employee->name; ?>" placeholder="Masukkan Nama" required>
										</div>
									</div>
									<div class="form-group">
										<label for="inputName" class="col-sm-2 control-label">Gender</label>

										<div class="col-sm-10">
											<input type="radio" name="gender" id="gender1" value="1" <?php if ($employee->gender == 1) {echo "checked";} ?> required> Laki - laki <br>
											<input type="radio" name="gender" id="gender1" value="0" <?php if ($employee->gender == 0) {echo "checked";} ?> required> Perempuan
										</div>
									</div>
									<div class="form-group">
										<label for="inputExperience" class="col-sm-2 control-label">Email</label>

										<div class="col-sm-10">
										<input type="text" name="email" class="form-control" id="email" value="<?php echo $employee->email; ?>" placeholder="Masukkan email" disabled>
										</div>
									</div>
									<div class="form-group">
										<label for="inputSkills" class="col-sm-2 control-label">Image</label>

										<div class="col-sm-10">
											<input type="file" name="image" class="form-control" id="image">
										</div>
									</div>
									<div class="form-group">
										<label for="inputSkills" class="col-sm-2 control-label">Lokasi</label>

										<div class="col-sm-10">
										<input type="text" name="location" class="form-control" id="location" value="<?php echo $employee->location; ?>" placeholder="Masukkan Lokasi">
										</div>
									</div>
									<div class="form-group">
										<label for="inputSkills" class="col-sm-2 control-label">Posisi</label>

										<div class="col-sm-10">
										<input type="text" name="position" class="form-control" id="position" value="<?php echo $employee->position; ?>" placeholder="Masukkan Posisi">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-danger">Submit</button>
										</div>
									</div>
								</form>
							</div>

							<div class="tab-pane" id="settings">
								<form class="form-horizontal" action="<?php echo base_url('profile/store_pw/');
																		echo $this->session->userdata('id'); ?>" method="post">
									<div class="form-group">
										<label for="inputName" and class="col-sm-2 control-label">Password</label>

										<div class="col-sm-10">
											<input type="password" name="password" class="form-control" id="inputName" placeholder="Masukkan password">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail" class="col-sm-2 control-label">Konfirmasi Password</label>

										<div class="col-sm-10">
											<input type="password" name="password_confirm" class="form-control" id="inputEmail" placeholder="Masukkan konfirmasi password">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-danger">Submit</button>
										</div>
									</div>
								</form>
							</div>
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div>
					<!-- /.nav-tabs-custom -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->

		</section>

	</div>
	<!-- /.content-wrapper -->

	<?php $this->load->view('components/footer'); ?>

</div>