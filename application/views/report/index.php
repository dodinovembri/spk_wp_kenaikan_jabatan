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
				<li class="active">Laporan</li>
			</ol>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title"><b>DaTa LaPoran PeranKingan PegaWai</small></h3></b>
						</div>
						<!-- /.box-header -->
						<div class="box-body">	
						<a href="<?= base_url('report/export/pdf') ?>"target="_blank" style="float:left; margin-right:2px; color:black" ><button>Pdf File</button></a>
							<table id="example6" class="table table-bordered table-striped">
								<thead style="background-color: #2E8B57; color: #F0F8FF">
									<tr>
										<th width="10px">No</th>
										<th>Tanggal Promosi</th>
										<th>Nama Pegawai</th>
										<th>Ranking</th>
										<th>Status</th>	
										<th>Posisi Baru</th>	
										<th>Actions</th>									
									</tr>
								</thead>
								<tbody>
									<?php $no = 0; foreach ($reports as $key => $value) { $no++; ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $value->date_of_promotion; ?></td>
											<td><?php echo $value->name; ?></td>
											<td><?php echo $value->ranking; ?></td>
											<td><?php echo check_report_status($value->status) ?></td>
											<td><?php echo check_position($value->new_position); ?></td>
											<td>
											<a href="<?php echo base_url('report/edit/'); echo $value->result_id; ?>"><i class="fa fa-pencil" style="margin-right: 6px;"></i></a>
											<a href="#" data-toggle="modal" data-target="#delete<?php echo $value->result_id; ?>"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
										<div class="modal modal-warning fade" id="delete<?php echo $value->result_id; ?>">
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
														<a href="<?php echo base_url('report/destroy/');
																	echo $value->result_id; ?>"><button type="button" class="btn btn-outline">Hapus</button></a>
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