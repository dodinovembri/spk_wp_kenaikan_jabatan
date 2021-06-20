<div class="wrapper">

	<?php $this->load->view('components/header'); ?>
	<?php $this->load->view('components/sidebar'); ?>

	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1><small></small></h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('/'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="<?php echo base_url('criteria'); ?>"> Divisi</a></li>
				<li class="active">Edit Data Divisi</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">

					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Edit Data Divisi</h3>
						</div>

						<!-- /.box-header -->
						<!-- form start -->
						<form role="form" action="<?php echo base_url('division/update/'); echo $division->id; ?>" method="post">
							<div class="box-body">
								<div class="form-group">
									<label for="exampleInputCriteriaName">Kode Divisi</label>
									<input type="text" name="division_code" class="form-control" value="<?php echo $division->division_code; ?>" id="exampleInputCriteriaName" placeholder="Masukkan kode divisi" required>
								</div>
								<div class="form-group">
									<label for="exampleInputBobot">Nama Divisi</label>
									<input type="text" name="division_name" class="form-control" value="<?php echo $division->division_name; ?>" id="exampleInputPassword1" placeholder="Masukkan nama divisi" required>
								</div>
								<div class="form-group">
									<label for="exampleInputBobot">Deskripsi</label>
									<textarea rows="3" name="description" class="form-control"  id="exampleInputPassword1" ><?= $division->description; ?></textarea>
								</div>
								<!-- /.box-body -->

								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Submit</button>
									<a href="<?php echo base_url('division') ?>"><button type="button" class="btn btn-danger">Batal</button></a>
								</div>
						</form>

					</div>
				</div>
		</section>


		<!-- /.content-wrapper -->
	</div>
	<?php $this->load->view('components/footer'); ?>

</div>