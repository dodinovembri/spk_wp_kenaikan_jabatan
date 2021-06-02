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
				<li class="active">Ranking</li>
			</ol>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Data Perankingan Pegawai</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">						
							<table id="example6" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th width="10px">No</th>
										<th>Date Of Promotion</th>
										<th>Employee Id</th>
										<th>Ranking</th>
										<th>Status</th>										
									</tr>
								</thead>
								<tbody>
									<?php $no = 0; foreach ($reports as $key => $value) { $no++; ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $value->date_of_promotion; ?></td>
											<td><?php echo $value->employee_id; ?></td>
											<td><?php echo $value->ranking;; ?></td>
											<td><?php echo $value->status; ?></td>
										</tr>
									<?php } ?>
							</table>
						</div>
						<div class="modal modal-primary fade" id="saveRanking">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Simpan Hasil Ranking</h4>
									</div>
									<div class="modal-body">
										<form role="form" action="<?php echo base_url('ranking/store') ?>" method="post">
											<div class="box-body">
												<div class="form-group">
													<label for="exampleInputCriteriaName">Tanggal Promosi</label>
													<input type="text" name="date_of_promotion" value="<?php echo date('d-m-Y') ?>" class="form-control" id="exampleInputCriteriaName" placeholder="Masukkan tolak ukur" readonly>
												</div>
												<!-- /.box-body -->
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-outline" data-dismiss="modal">Batal</button>
										</form>
										<button type="submit" class="btn btn-outline">Simpan Ranking</button></a>

									</div>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
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