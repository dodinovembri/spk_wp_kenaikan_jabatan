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

					<?php if ($this->session->userdata('role_id') == 0) { ?>
						<div class="box">
							<div class="box-header">
								<h3 class="box-title"><b>Nilai Bobot</h3></b>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<table id="example1" class="table table-bordered table-striped">
									<thead style="background-color: #2E8B57; color: #F0F8FF">
										<tr>
											<th>No</th>
											<th>Nilai Bobot</th>
											
										</tr>
									</thead>
									<tbody>
										<?php $no = 0; foreach ($weight_fixes as $key => $value) { $no++; ?>	
											<tr>
												<td>W<?php echo $no; ?></td>
												<td><?php echo $value; ?></td>
											</tr>
										<?php } ?>
								</table>
							</div>
							<!-- /.box-body -->
						</div>

						<div class="box">
							<div class="box-header">
								<h3 class="box-title"><b>Vektor S</h3></b>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<table id="example5" class="table table-bordered table-striped">
									<thead style="background-color: #2E8B57; color: #F0F8FF">
										<tr>
											<th width="10px">No</th>
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
										<?php $no = 0; foreach ($s_vector_total as $key => $value) { 
											$no++;
											$employee_id = $value['employee_id'];
											$sql ="SELECT * FROM employee WHERE id = $employee_id";
											$query = $this->db->query($sql); 
										?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $query->row()->nik; ?></td>
												<td><?php echo $query->row()->name; ?></td>
												<td><?php echo check_gender($query->row()->gender); ?></td>
												<td><?php echo $query->row()->email; ?></td>
												<td><?php echo check_position($query->row()->position); ?></td>
												<td><?php echo $value['total_s_vector']; ?></td>
											</tr>
										<?php } ?>
								</table>
							</div>
							<!-- /.box-body -->
						</div>

						<div class="box">
							<div class="box-header">
								<h3 class="box-title"><b>Vektor V</h3></b>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<table id="example3" class="table table-bordered table-striped">
									<thead style="background-color: #2E8B57; color: #F0F8FF">
										<tr>
											<th width="10px">No</th>
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
										<?php $no = 0; foreach ($v_vector_not_sort as $key => $value) { 
											$no++;
											$employee_id = $value['employee_id'];
											$sql ="SELECT * FROM employee WHERE id = $employee_id";
											$query = $this->db->query($sql); 
										?>
											<tr>
												<td><?php echo $no; ?></td>
												<td><?php echo $query->row()->nik; ?></td>
												<td><?php echo $query->row()->name; ?></td>
												<td><?php echo check_gender($query->row()->gender); ?></td>
												<td><?php echo $query->row()->email; ?></td>
												<td><?php echo check_position($query->row()->position); ?></td>
												<td><?php echo $value['v_vector']; ?></td>
											</tr>
										<?php } ?>
								</table>
							</div>
							<!-- /.box-body -->
						</div>					
					<?php } ?>
					<div class="box">
						<div class="box-header">
							<h3 class="box-title"><b>Data Perankingan Pegawai</h3></b>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
						<?php if ($this->session->userdata('role_id') == 0) { ?>
							<button type="button" data-toggle="modal" data-target="#saveRanking" class="btn btn-block btn-primary" style="width: 20%;"><i class="fa fa-save"> </i>&nbsp; Simpan Hasil/ Promosikan</button>
						<?php } ?>
						
						<br>
							<table id="example4" class="table table-bordered table-striped">
								<thead style="background-color: #2E8B57; color: #F0F8FF">
									<tr>
										<th width="10px">Ranking</th>
										<th>NIK</th>
										<th>Nama</th>
										<th>Gender</th>
										<th>Email</th>
										<th>Posisi</th>
										<th>Posisi Baru</th>
										<th>Hasil Perhitungan</th>
									</tr>
								</thead>
								<tbody>
									<?php $this->load->helper('function'); ?>
									<?php $no = 0; foreach ($v_vector as $key => $value) { 
										$no++;
										$employee_id = $value['employee_id'];
										$sql ="SELECT * FROM employee WHERE id = $employee_id";
										$query = $this->db->query($sql); 
									?>
										<tr>
											<td><?php echo $no; ?></td>
											<td><a href="<?php echo base_url('ranking/show/'); echo $employee_id; ?>"><b><?php echo $query->row()->nik; ?></b></a></td>
											<td><?php echo $query->row()->name; ?></td>
											<td><?php echo check_gender($query->row()->gender); ?></td>
											<td><?php echo $query->row()->email; ?></td>
											<td><?php echo check_position($query->row()->position); ?></td>
											<td><?php echo check_position($query->row()->new_position); ?></td>
											<td><?php echo$value['v_vector']; ?></td>
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