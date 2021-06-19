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
				<li class="active">Tambah Data</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">

					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Tambah Data Pegawai</h3>
						</div>

						<!-- /.box-header -->
						<!-- form start -->
						<form role="form" action="<?php echo base_url('employee/store') ?>" method="post" enctype="multipart/form-data">
							<div class="box-body">
								<div class="form-group">
									<label for="nik">NIK</label>
									<input type="text" name="nik" class="form-control" id="nik" placeholder="Masukkan NIK" required>
								</div>
								<div class="form-group">
									<label for="name">Nama</label>
									<input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama" required>
								</div>
								<div class="form-group">
								<label for="name">Gender</label>
									<div class="radio">
										<label>
											<input type="radio" name="gender" id="gender1" value="1" checked required> Laki - laki <br>
											<input type="radio" name="gender" id="gender1" value="0" required> Perempuan
										</label>
									</div>
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" class="form-control" id="email" placeholder="Masukkan Email" required>
								</div>
								
								<div class="form-group">
									<label for="location">Lokasi</label>
									<input type="text" name="location" class="form-control" id="location" placeholder="Masukkan Lokasi">
								</div>
								<div class="form-group">
									<label for="division">Divisi</label>
									<input type="text" name="division" class="form-control" id="division" placeholder="Masukkan Divisi">
								</div>
								<div class="form-group">
									<label for="position">Posisi</label>
									<input type="text" name="position" class="form-control" id="position" placeholder="Masukkan Posisi">
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