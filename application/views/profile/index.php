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
								<form class="form-horizontal" action="<?php echo base_url('profile/store/');
																		echo $employee->id; ?>" enctype="multipart/form-data" method="post">
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
											<input type="radio" name="gender" id="gender1" value="1" <?php if ($employee->gender == 1) {
																											echo "checked";
																										} ?> required> Laki - laki <br>
											<input type="radio" name="gender" id="gender1" value="0" <?php if ($employee->gender == 0) {
																											echo "checked";
																										} ?> required> Perempuan
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
											<input type="text" name="position" class="form-control" id="position" value="<?php echo $employee->position; ?>" placeholder="Masukkan Posisi" disabled>
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
											<input type="password" name="password" style="width: 95%; display:inline-block" class="form-control" id="pass" placeholder="Masukkan password"> &nbsp;
											<span id="mybutton" onclick="change()"><i class="glyphicon glyphicon-eye-open"></i></span>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail" class="col-sm-2 control-label">Konfirmasi Password</label>

										<div class="col-sm-10">
											<input type="password" style="width: 95%; display:inline-block" name="password_confirm" class="form-control" id="pass2" placeholder="Masukkan konfirmasi password"> &nbsp;
											<span id="mybutton2" onclick="change2()"><i class="glyphicon glyphicon-eye-open"></i></span>
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

	<script>
		function change() {
			var x = document.getElementById('pass').type;

			if (x == 'password') {
				document.getElementById('pass').type = 'text';
				document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-close"></i>';
			} else {
				document.getElementById('pass').type = 'password';
				document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-open"></i>';
			}
		}

		function change2() {
			var x = document.getElementById('pass2').type;

			if (x == 'password') {
				document.getElementById('pass2').type = 'text';
				document.getElementById('mybutton2').innerHTML = '<i class="glyphicon glyphicon-eye-close"></i>';
			} else {
				document.getElementById('pass2').type = 'password';
				document.getElementById('mybutton2').innerHTML = '<i class="glyphicon glyphicon-eye-open"></i>';
			}
		}
	</script>

	<?php $this->load->view('components/footer'); ?>

</div>