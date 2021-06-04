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
				<li class="active">Tambah Data Rating Pegawai</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">

					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Tambah Data Rating Pegawai</h3>
						</div>

						<!-- /.box-header -->
						<!-- form start -->
						<form role="form" action="<?php echo base_url('rating/store') ?>" method="post">
							<div class="box-body">
								<?php foreach ($criterias as $key => $value) { ?>
									<div class="form-group">
										<?php if ($this->session->userdata('role_id') == 0) {
											if ($value->criteria_code == 'C7') { ?>
												<label for="exampleInputCriteriaName"><?php echo $value->criteria_name; ?></label>
												<select class="form-control" name="criteria_criterion[]" required="">
													<option value="">Pilih</option>
													<?php
													$criteria_id = $value->id;
													$sql = "SELECT * FROM criterion_value WHERE criteria_id = $criteria_id";
													$query = $this->db->query($sql);
													?>
													<?php foreach ($query->result() as $row) { ?>
														<option value="<?php echo $criteria_id;
																		echo '&';
																		echo $row->id; ?>"><?php echo $row->information; ?></option>
													<?php } ?>
												</select>
											<?php }
										}elseif ($this->session->userdata('role_id') == 1) {
											if ($value->criteria_code == 'C9') { ?>
												<label for="exampleInputCriteriaName"><?php echo $value->criteria_name; ?></label>
												<select class="form-control" name="criteria_criterion[]" required="">
													<option value="">Pilih</option>
													<?php
													$criteria_id = $value->id;
													$sql = "SELECT * FROM criterion_value WHERE criteria_id = $criteria_id";
													$query = $this->db->query($sql);
													?>
													<?php foreach ($query->result() as $row) { ?>
														<option value="<?php echo $criteria_id;
																		echo '&';
																		echo $row->id; ?>"><?php echo $row->information; ?></option>
													<?php } ?>
												</select>
											<?php }
										}elseif ($this->session->userdata('role_id') == 2) {
											if ($value->criteria_code == 'C1' || $value->criteria_code == 'C2' || $value->criteria_code == 'C3' || $value->criteria_code == 'C4' || $value->criteria_code == 'C5' || $value->criteria_code == 'C6' || $value->criteria_code == 'C8') { ?>
												<label for="exampleInputCriteriaName"><?php echo $value->criteria_name; ?></label>
												<select class="form-control" name="criteria_criterion[]" required="">
													<option value="">Pilih</option>
													<?php
													$criteria_id = $value->id;
													$sql = "SELECT * FROM criterion_value WHERE criteria_id = $criteria_id";
													$query = $this->db->query($sql);
													?>
													<?php foreach ($query->result() as $row) { ?>
														<option value="<?php echo $criteria_id;
																		echo '&';
																		echo $row->id; ?>"><?php echo $row->information; ?></option>
													<?php } ?>
												</select>
											<?php }
										} ?>
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