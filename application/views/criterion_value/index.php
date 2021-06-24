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
				<li><a href="<?php echo base_url('criteria'); ?>"> Kriteria</a></li>
				<li class="active">Nilai Kriteria</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">

					<div class="box">
						<div class="box-header">
							<h3 class="box-title"><b>Data Nilai Kriteria</h3></b>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<?php if ($this->session->userdata('role_id') != 3) { ?>
								<a href="<?php echo base_url('criterion_value/create') ?>"><button type="button" class="btn btn-block btn-primary" style="width: 11%;"><i class="fa fa-plus"></i> Tambah Baru</button></a>
								<br>
							<?php } ?>
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
							<table id="example1" class="table table-bordered table-striped">
								<thead style="background-color: #2E8B57; color: #F0F8FF">
									<tr>
										<th>No</th>
										<th>Kriteria</th>
										<th>Tolak Ukur</th>
										<th>Deskripsi</th>
										<th>Nilai</th>
										<?php if ($this->session->userdata('role_id') != 3) { ?>
											<th>Aksi</th>
										<?php } ?>
									</tr>
								</thead>
								<tbody>
									<?php $no = 0;
									foreach ($criterion_values as $key => $value) {
										$no++; ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $value->criteria_code; ?></td>
											<td><?php echo $value->benchmark; ?></td>
											<td><?php echo $value->information; ?></td>
											<td><?php echo $value->score; ?></td>
											<?php if ($this->session->userdata('role_id') != 3) { ?>
											<td>
												<a href="<?php echo base_url('criterion_value/edit/'); echo $value->id; ?>"><i class="fa fa-pencil" style="margin-right: 6px;"></i></a>
												<a href="#" data-toggle="modal" data-target="#delete<?php echo $value->id; ?>"><i class="fa fa-trash"></i></a>
											</td>
											<?php } ?>
										</tr>
										<div class="modal modal-warning fade" id="delete<?php echo $value->id; ?>">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span></button>
														<h4 class="modal-title">Delete Data</h4>
													</div>
													<div class="modal-body">
														<p>Kamu yakin ingin menghapus data ini?</p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-outline" data-dismiss="modal">Batal</button>
														<a href="<?php echo base_url('criterion_value/destroy/');
																	echo $value->id; ?>"><button type="button" class="btn btn-outline">Hapus</button></a>
													</div>
												</div>
												<!-- /.modal-content -->
											</div>
											<!-- /.modal-dialog -->
										</div>
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