<div class="wrapper">

	<?php $this->load->view('components/header'); ?>
	<?php $this->load->view('components/sidebar'); ?>

	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1><small></small></h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('/') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="<?php echo base_url('employee') ?>"> Pegawai</a></li>
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
						<form role="form" action="<?php echo base_url('employee/update/'); echo $employee->id; ?>" method="post" enctype="multipart/form-data">
							<div class="box-body">
								<div class="form-group">
									<label for="nik">NIK</label>
									<input type="text" name="nik" class="form-control" id="nik" placeholder="Masukkan NIK" value="<?php echo $employee->nik; ?>" required>
								</div>
								<div class="form-group">
									<label for="name">Nama</label>
									<input type="text" name="name" class="form-control" id="name" value="<?php echo $employee->name; ?>" placeholder="Masukkan Nama" required>
								</div>
								<div class="form-group">
								<label for="name">Gender</label>
									<div class="radio">
										<label>
											<input type="radio" name="gender" id="gender1" value="1" <?php if ($employee->gender == 1) {echo "checked";} ?> required> Laki - laki <br>
											<input type="radio" name="gender" id="gender1" value="0" <?php if ($employee->gender == 0) {echo "checked";} ?> required> Perempuan
										</label>
									</div>
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" class="form-control" id="email" value="<?php echo $employee->email; ?>" placeholder="Masukkan email" disabled>
								</div>
								
								<div class="form-group">
									<label for="location">Lokasi</label>
									<input type="text" name="location" class="form-control" id="location" value="<?php echo $employee->location; ?>" placeholder="Masukkan Lokasi">
								</div>
								<div class="form-group">
									<label for="division">Divisi</label>
									<select name="division_id" id="" class="form-control">
										<option value="<?php echo $employee->division_id ?>">Select</option>
										<?php foreach ($divisions as $key => $value) { ?>
											<option value="<?php echo $value->id ?>"><?php echo $value->division_name ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label for="division">Position</label>
									<select name="position" id="" class="form-control">
										<option value="<?php $employee->position ?>">Select</option>
										<option value="1">ADM/OPR/MEC/ELEC/ANL</option>
										<option value="2">Junior Manager</option>
										<option value="3">Manager</option>
										<option value="4">Senior Manager</option>
									</select>
								</div>
								<!-- /.box-body -->

								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Simpan</button>
									<a href="<?php echo base_url('employee') ?>"><button type="button" class="btn btn-danger">Batal</button></a>
								</div>
						</form>

					</div>
				</div>
		</section>


		<!-- /.content-wrapper -->
	</div>
	<?php $this->load->view('components/footer'); ?>

</div>