<div class="wrapper">

	<?php $this->load->view('components/header'); ?>
	<?php $this->load->view('components/sidebar'); ?>

	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1><small></small></h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('/'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="<?php echo base_url('criteria'); ?>"> Kriteria</a></li>
				<li><a href="<?php echo base_url('criterion_values/'); echo $this->session->userdata('criteria_id') ?>"> Nilai Kriteria</a></li>
				<li class="active">Tambah Data Nilai Kriteria</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">

					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Tambah Data Nilai Kriteria</h3>
						</div>

						<!-- /.box-header -->
						<!-- form start -->
						<form role="form" action="<?php echo base_url('criterion_value/store') ?>" method="post">
							<div class="box-body">
								<div class="form-group">
									<label for="exampleInputCriteriaName">Tolak Ukur</label>
									<input type="text" name="benchmark" class="form-control" id="exampleInputCriteriaName" placeholder="Masukkan tolak ukur" required>
								</div>
								<div class="form-group">
									<label for="exampleInputCriteriaName">Deskripsi</label>
									<input type="text" name="information" class="form-control" id="exampleInputCriteriaName" placeholder="Masukkan nama nilai kriteria" required>
								</div>
								<div class="form-group">
									<label for="exampleInputBobot">Nilai</label>
									<input type="text" name="score" class="form-control" id="exampleInputPassword1" placeholder="Masukkan nilai kriteria" required>
								</div>
								<!-- /.box-body -->

								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Submit</button>
									<a href="<?php echo base_url('criteria') ?>"><button type="button" class="btn btn-danger">Batal</button></a>
								</div>
						</form>

					</div>
				</div>
		</section>


		<!-- /.content-wrapper -->
	</div>
	<?php $this->load->view('components/footer'); ?>

</div>