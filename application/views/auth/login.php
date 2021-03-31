<body class="body">
<div class="login-box">
	<div class="login-logo">
		<a href="#"><b>Login</b> Pages</a>
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">Sign in to start your session</p>


		<form action="<?php echo base_url('auth/login'); ?>" method="POST">
			<div class="form-group has-feedback">
				<input type="email" class="form-control" placeholder="Email">
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" placeholder="Password">
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