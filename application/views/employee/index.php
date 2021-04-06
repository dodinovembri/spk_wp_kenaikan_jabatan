<div class="wrapper">

	<?php $this->load->view('components/header'); ?>
	<?php $this->load->view('components/sidebar'); ?>
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1><small></small></h1>
			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">

					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Data Employee</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<a href="<?php echo base_url('user/create') ?>"><button type="button" class="btn btn-block btn-primary" style="width: 10%;">Tambah</button></a>
							<br>
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Email</th>
										<th>Role</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $this->load->helper('function'); ?>
									<?php $no = 0; foreach ($employees as $key => $value) { $no++; ?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><?php echo $value->email; ?></td>
											<td><?php echo check_role($value->role_id); ?></td>
											<td>
												<a href="<?php echo base_url('user/edit', $value->id) ?>"><i class="fa fa-pencil" style="margin-right: 6px;"></i></a> 
												<a href="<?php echo base_url('user/destroy', $value->id) ?>"><i class="fa fa-trash"></i></a>
											</td>
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