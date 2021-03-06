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
				<li class="active">Pegawai</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">

					<div class="box">
						<div class="box-header">
							<h3 class="box-title"><b>DaTa PeGawai</b></h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<?php if ($this->session->userdata('role_id') == 0) { ?>
								<a href="<?php echo base_url('employee/create') ?>"><button type="button" class="btn btn-block btn-primary" style="width: 11%;"><i class="fa fa-plus"></i> Tambah Baru</button></a>
							<?php } ?>
							<br>
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
										<th>NIK</th>
										<th>Nama</th>
										<th>Gender</th>
										<th>Email</th>
										<th>Lokasi</th>
										<th>Divisi</th>
										<th>Posisi</th>
										<th>Posisi Baru</th>
										<?php if ($this->session->userdata('role_id') != 3) { ?>
											<th>Aksi</th>
										<?php } ?>
									</tr>
								</thead>
								<tbody>
									<?php $this->load->helper('function'); ?>
									<?php $no = 0;
									foreach ($employees as $key => $value) {
										$no++; ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td>
												<?php if ($this->session->userdata('role_id') == 0) {
													if ($value->is_rating_admin == 1) { ?>
														<?php echo $value->nik; ?><sup><i class="fa fa-star" style="margin-right: 6px; color: blue;"></i></sup>
													<?php } else{ ?>
														<?php echo $value->nik; ?>
													<?php }
												}elseif ($this->session->userdata('role_id') == 1) {
													if ($value->is_rating_leader == 1) { ?>
														<?php echo $value->nik; ?><sup><i class="fa fa-star" style="margin-right: 6px; color: blue;"></i></sup>
													<?php } else{ ?>
														<?php echo $value->nik; ?>
													<?php }
												}elseif ($this->session->userdata('role_id') == 2) { 
													if ($value->is_rating_interviewer == 1) { ?>
														<?php echo $value->nik; ?><sup><i class="fa fa-star" style="margin-right: 6px; color: blue;"></i></sup>
													<?php } else{ ?>
														<?php echo $value->nik; ?>
													<?php }
												}elseif ($this->session->userdata('role_id') == 3) {
													echo $value->nik;
												} ?>
											</td>
											<td><?php echo $value->name; ?></td>
											<td><?php echo check_gender($value->gender); ?></td>
											<td><?php echo $value->email ?></td>
											<td><?php echo $value->location; ?></td>
											<td><?php echo $value->division; ?></td>
											<td><?php echo check_position($value->position); ?></td>
											<td><?php echo check_position($value->new_position); ?></td>
											<td>
												<?php if ($this->session->userdata('role_id') != 3) { ?>													
													<a href="<?php echo base_url('ratings/'); echo $value->id; ?>"><i class="fa fa-ticket" style="margin-right: 6px;"></i></a>
												<?php } ?>
												<?php if ($this->session->userdata('role_id') == 0) { ?>
													<a href="<?php echo base_url('employee/edit/'); echo $value->id; ?>"><i class="fa fa-pencil" style="margin-right: 6px;"></i></a>
													<a data-toggle="modal" data-target="#delete<?php echo $value->id; ?>"><i class="fa fa-trash"></i></a>
												<?php } ?>
											</td>
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
														<a href="<?php echo base_url('employee/destroy/'); echo $value->id; ?>"><button type="button" class="btn btn-outline">Hapus</button></a>
													</div>
												</div>
												<!-- /.modal-content -->
											</div>
											<!-- /.modal-dialog -->
										</div>
									<?php } ?>
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