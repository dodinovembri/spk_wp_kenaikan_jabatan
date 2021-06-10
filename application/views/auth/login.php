<div class="login-box">
	<div class="login-logo">
		<a href="#" style="color: #FFFAF0"><b style="color: #FFFAF0">Login</b> Pages</a>
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg"><img src="<?php echo base_url() ?>assets/img/logo1.png" alt="logo" widht="10%"><h7><b style="color: #3CB371">SPK Promosis Jabatan</p></b></h7>
		<?php if ($this->session->flashdata('success')) { ?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<?php echo $this->session->flashdata('success'); $this->session->unset_userdata('success'); ?>
			</div>
		<?php } elseif ($this->session->flashdata('warning')) { ?>
			<div class="alert alert-warning" role="alert">
				<?php echo $this->session->flashdata('warning'); $this->session->unset_userdata('warning'); ?>
			</div>
		<?php } ?>
		<form action="<?php echo base_url('auth/login'); ?>" method="POST">
			<div class="form-group has-feedback">
				<input type="email" name="username" class="form-control" placeholder="Email">
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" name="password" class="form-control" placeholder="Password">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="row">
			<div class="col-xs-8">
			
			</div>
				<!-- /.col -->
				<p></p>
				<div class="col-xs-12">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
				</div>
				<!-- /.col -->
			</div>
		</form>

		
	<!-- /.login-box-body -->
</div>
<!-- /.login-box -->