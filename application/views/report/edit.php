<div class="wrapper">

	<?php $this->load->view('components/header'); ?>
	<?php $this->load->view('components/sidebar'); ?>

	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1><small></small></h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('/') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="<?php echo base_url('employee') ?>"> Laporan</a></li>
				<li class="active">Pengangkatan Posisi Pegawai</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">

					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Pengangkatan Posisi Pegawai</h3>
						</div>

						<!-- /.box-header -->
						<!-- form start -->
						<form role="form" action="<?php echo base_url('report/update/'); echo $report->result_id ?>" method="post" enctype="multipart/form-data">
							<div class="box-body">
                                <div class="form-group">
									<label for="nik">Nama</label>
									<input type="text" name="employee_id" class="form-control" id="nik" value="<?php echo $report->name ?>" readonly>
								</div>	
								<div class="form-group">
									<label for="nik">Posisi Baru</label>
									<input type="text" name="new_position" class="form-control" id="nik" placeholder="Masukkan Posisi Baru" required>
								</div>		

                                <div class="box-footer">
									<button type="submit" class="btn btn-primary">Simpan</button>
									<a href="<?php echo base_url('report') ?>"><button type="button" class="btn btn-danger">Batal</button></a>
								</div>						
						</form>

					</div>
				</div>
		</section>


		<!-- /.content-wrapper -->
	</div>
	<?php $this->load->view('components/footer'); ?>

</div>