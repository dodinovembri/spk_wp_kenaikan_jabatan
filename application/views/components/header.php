<header class="main-header">

<!-- Logo -->
<a href="<?php echo base_url('/') ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>S</b>BR</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Semen</b> BatuRaja</span>
</a>
<?php 
    $CI =& get_instance();
    $CI->load->model(['UserModel', 'EmployeeModel']);
    $user_id = $this->session->userdata('id');
    $user = $CI->UserModel->getById($user_id)->row();
    $employee = $CI->EmployeeModel->getById($user->employee_id)->row(); 
?>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo base_url('uploads/employee/'); echo $employee->image; ?>" class="user-image" alt="User Image">
                    <span class="hidden-xs"><?php echo $employee->name; ?></span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <img src="<?php echo base_url('uploads/employee/'); echo $employee->image; ?>" class="img-circle" alt="User Image">

                        <p>
                            <?php echo $employee->name; ?>
                            <small><?php echo $this->session->userdata('role_name') ?></small>
                        </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body">
                        <!-- /.row -->
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="<?php echo base_url('profile') ?>" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                            <a href="<?php echo base_url('logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

</nav>
</header>