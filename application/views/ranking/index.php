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
							<table id="ranking" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th width="10px">Ranking</th>
										<th>NIK</th>
										<th>Nama</th>
										<th>Gender</th>
										<th>Email</th>
										<th>Posisi</th>
										<th>Hasil Perhitungan</th>
									</tr>
								</thead>
								<tbody>
									<?php $this->load->helper('function'); ?>
									<?php foreach ($v_vector as $key => $value) { 
										$employee_id = $value['employee_id'];
										$sql ="SELECT * FROM employee WHERE id = $employee_id";
										$query = $this->db->query($sql); 
									?>
										<tr>
											<td></td>
											<td><?php echo $query->row()->nik; ?></td>
											<td><?php echo $query->row()->name; ?></td>
											<td><?php echo check_gender($query->row()->gender); ?></td>
											<td><?php echo $query->row()->email; ?></td>
											<td><?php echo $query->row()->position; ?></td>
											<td><?php echo$value['v_vector']; ?></td>
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