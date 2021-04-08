	<div class="wrapper">

		<?php $this->load->view('components/header'); ?>
		<?php $this->load->view('components/sidebar'); ?>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Dashboard
				</h1>
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url('/') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
					<li class="active">Dashboard</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- Info boxes -->
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">Pegawai</span>
								<span class="info-box-number"><?php echo $employees; ?></span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-red"><i class="fa fa-laptop"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">Kriteria</span>
								<span class="info-box-number"><?php echo $criterias; ?></span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->

					<!-- fix for small devices only -->
					<div class="clearfix visible-sm-block"></div>

					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-green"><i class="fa fa-user"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">User</span>
								<span class="info-box-number"><?php echo $users; ?></span>
							</div>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

							<div class="info-box-content">
								<span class="info-box-text">Ranking</span>
								<span class="info-box-number"><a href="<?php echo base_url('ranking') ?>">Details</a></span>
							</div>
							<!-- /.info-box-content -->





							<!-- /.box-body -->

							<!-- /.box-footer -->
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