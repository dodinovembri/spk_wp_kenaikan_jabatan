<div class="wrapper">

	<?php $this->load->view('components/header'); ?>
	<?php $this->load->view('components/sidebar'); ?>

	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1><small></small></h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('/') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="<?php echo base_url('user') ?>"> User</a></li>
				<li class="active">Tambah Data User</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">

					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Tambah Data User</h3>
						</div>

						<!-- /.box-header -->
						<!-- form start -->
						<form role="form" action="<?php echo base_url('user/store') ?>" method="post">
							<div class="box-body">
								<div class="form-group">
									<label>Pegawai</label>
									<select class="form-control" name="employee">
										<option value="">Pilih</option>
										<?php foreach ($users as $key => $value) { ?>
											<option value="<?php echo $value->id; ?>"><?php echo $value->name ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label>Role</label>
									<select class="form-control" name="role">
										<option value="">Pilih</option>
										<option value="0">Administrator</option>
										<option value="1">Leader</option>
										<option value="3">Interviewer</option>
										<option value="4">Direktur</option>
										<option value="5">Employee</option>
									</select>
								</div>

								<!-- /.box-body -->

								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Simpan</button>
									<a href="<?php echo base_url('user') ?>"><button type="button" class="btn btn-danger">Batal</button></a>
								</div>
						</form>

					</div>
				</div>
		</section>


		<!-- /.content-wrapper -->
	</div>
	<?php $this->load->view('components/footer'); ?>

</div>