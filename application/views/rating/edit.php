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
								<?php foreach ($criterion_values as $key => $value) { ?>
									<div class="form-group">
										<label for="exampleInputCriteriaName">Score</label>
										<select class="form-control" name="criterion_value_id" required="">
											<option value="">Pilih</option>
												<option value="<?php echo $value->id; ?>"><?php echo $value->information; ?></option>
										</select>
									</div>
								<?php } ?>
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