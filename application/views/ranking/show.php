<div class="wrapper">

	<?php $this->load->view('components/header'); ?>
	<?php $this->load->view('components/sidebar'); ?>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1><small></small></h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('/'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="<?php echo base_url('ranking'); ?>"> Ranking</a></li>
				<li class="active">Detail Penilaian</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">

					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Data Rating Pegawai</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Pegawai</th>
										<th>Kriteria</th>
										<th>Nama Kriteria</th>
										<th>Deskripsi</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td colspan="5">Administrator</td>
									</tr>
									<?php $no = 0;
									foreach ($employee_ratings as $key => $value) {
										$no++; 
										if ($value->criteria_code == 'C7') { ?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $value->nik; ?></td>
												<td><?php echo $value->criteria_code; ?></td>
												<td><?php echo $value->criteria_name; ?></td>
												<td><?php echo $value->information; ?></td>

											</tr>
										<?php } ?>
									<?php } ?>

									<tr>
										<td colspan="5">Leader</td>
									</tr>
									<?php $no = 0;
									foreach ($employee_ratings as $key => $value) {
										$no++; 
										if ($value->criteria_code == 'C9') { ?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $value->nik; ?></td>
												<td><?php echo $value->criteria_code; ?></td>
												<td><?php echo $value->criteria_name; ?></td>
												<td><?php echo $value->information; ?></td>
											</tr>
										<?php } ?>
									<?php } ?>

									<tr>
										<td colspan="5">Interviewer</td>
									</tr>
									<?php $no = 0;
									foreach ($employee_ratings as $key => $value) {
										$no++; 
										if ($value->criteria_code == 'C1' || $value->criteria_code == 'C2' || $value->criteria_code == 'C3' || $value->criteria_code == 'C4' || $value->criteria_code == 'C5' || $value->criteria_code == 'C6' || $value->criteria_code == 'C8') { ?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $value->nik; ?></td>
												<td><?php echo $value->criteria_code; ?></td>
												<td><?php echo $value->criteria_name; ?></td>
												<td><?php echo $value->information; ?></td>
											</tr>
										<?php } ?>
									<?php } ?>
								<tbody>

							</table>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</section>
		<!-- /.content -->

	</div>
	<!-- /.content-wrapper -->

	<?php $this->load->view('components/footer'); ?>

</div>