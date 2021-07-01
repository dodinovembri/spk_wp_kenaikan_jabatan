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
							<h3 class="box-title"><b>Data Perankingan Pegawai</h3></b>
						</div>
						<!-- /.box-header -->
						<div class="box-body">						
							<table id="example6" class="table table-bordered table-striped">
								<thead style="background-color: #2E8B57; color: #F0F8FF">
									<tr>
										<th width="10px">No</th>
										<th>Date Of Promotion</th>
										<th>Employee Id</th>
										<th>Ranking</th>
										<th>Status</th>	
										<th>Posisi Baru</th>	
									</tr>
								</thead>
								<tbody>
									<?php $no = 0; foreach ($reports as $key => $value) { $no++; ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $value->date_of_promotion; ?></td>
											<td><?php echo $value->name; ?></td>
											<td><?php echo $value->ranking;; ?></td>
											<td><?php echo check_report_status($value->status) ?></td>
											<td><?php echo check_position($value->new_position); ?></td>
										</tr>
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