<div class="wrapper">

	<?php $this->load->view('components/header'); ?>
	<?php $this->load->view('components/sidebar'); ?>

	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1><small></small></h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('/'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="<?php echo base_url('employee'); ?>"> Pegawai</a></li>
				<li><a href="<?php echo base_url('ratings/');
								echo $this->session->userdata('employee_id') ?>"> Rating Pegawai</a></li>
				<li class="active">Edit Data Rating Pegawai</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">

					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Edit Data Rating Pegawai</h3>
						</div>

						<!-- /.box-header -->
						<!-- form start -->
						<form role="form" action="<?php echo base_url('rating/update/'); echo $rating->id; ?>" method="post">
							<div class="box-body">
								<div class="form-group">
									<label for="name">Pegawai</label>
									<input type="text" value="<?php echo $employee->nik; ?>" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label for="name">Kriteria</label>
									<input type="text" value="<?php echo $criteria->criteria_code; ?>" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label for="name">Nama Kriteria</label>
									<input type="text" value="<?php echo $criteria->criteria_name; ?>" class="form-control" readonly>
								</div>
									<div class="form-group">
										<label for="exampleInputCriteriaName">Score</label>
										<select class="form-control" name="criterion_value_id" required="">
											<option value="">Pilih</option>
											<?php foreach ($criterion_values as $key => $value) { ?>
												<option value="<?php echo $value->id; ?>"><?php echo $value->benchmark; ?></option>
											<?php } ?>
										</select>
									</div>
								<!-- /.box-body -->

								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Submit</button>
									<a href="<?php echo base_url('ratings/'); echo $this->session->userdata('employee_id')  ?>"><button type="button" class="btn btn-danger">Batal</button></a>
								</div>
						</form>

					</div>
				</div>
		</section>


		<!-- /.content-wrapper -->
	</div>
	<?php $this->load->view('components/footer'); ?>

</div>