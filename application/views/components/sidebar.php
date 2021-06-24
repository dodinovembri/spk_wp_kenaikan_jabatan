<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <?php 
        $CI =& get_instance();
        $CI->load->model(['UserModel', 'EmployeeModel']);
        $user_id = $this->session->userdata('id');
        $user = $CI->UserModel->getById($user_id)->row();
        $employee = $CI->EmployeeModel->getById($user->employee_id)->row(); 
    ?>
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('uploads/employee/'); echo $employee->image; ?>" class="img-circle" alt="User Image" style="margin-bottom: 20px;"> 
            </div>
            <div class="pull-left info">
                <p><?php echo $employee->name; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <?php if ($this->session->userdata('role_id') == 0) { ?>
                <li class="header">MAIN NAVIGATION</li>
                <li class="<?php if ($this->uri->segment(1) == "home")  echo "active"; ?>"><a href="<?php echo base_url('/') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                <!-- /employee-->
                
                <li class="<?php if ($this->uri->segment(1) == "employee" || $this->uri->segment(1) == "ratings" || $this->uri->segment(1) == "rating")  echo "active"; ?>"><a href="<?php echo base_url('employee') ?>"><i class="fa fa-users"></i> <span>Pegawai</span></a></li>
                <!-- /rating-->
                <li class="<?php if ($this->uri->segment(1) == "ranking")  echo "active"; ?>"><a href="<?php echo base_url('ranking') ?>"><i class="fa fa-circle-o"></i> <span>Perhitungan WP</span></a></li>
                <!-- /user-->
                <li class="<?php if ($this->uri->segment(1) == "report")  echo "active"; ?>"><a href="<?php echo base_url('report') ?>"><i class="fa fa-circle-o text-aqua"></i> <span>Hasil Ranking</span></a></li>
                <li class="header"></li>
                <li class="<?php if ($this->uri->segment(1) == "user")  echo "active"; ?>"><a href="<?php echo base_url('user') ?>"><i class="fa fa-circle-o text-aqua"></i> <span>Users</span></a></li>
                <!-- /criteria-->
                <li class="<?php if ($this->uri->segment(1) == "criteria" || $this->uri->segment(1) == "criterion_value" || $this->uri->segment(1) == "criterion_values")  echo "active"; ?>"><a href="<?php echo base_url('criteria') ?>"><i class="fa fa-laptop"></i> <span>Kriteria</span></a></li>
                <li class="<?php if ($this->uri->segment(1) == "division")  echo "active"; ?>"><a href="<?php echo base_url('division') ?>"><i class="fa fa-circle-o text-aqua"></i> <span>Divisi</span></a></li>
            <?php } elseif ($this->session->userdata('role_id') == 1 || $this->session->userdata('role_id') == 2) { ?> 
                <li class="header">MAIN NAVIGATION</li>
                <li class="<?php if ($this->uri->segment(1) == "home")  echo "active"; ?>"><a href="<?php echo base_url('/') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                <!-- /employee-->
                
                <li class="<?php if ($this->uri->segment(1) == "employee" || $this->uri->segment(1) == "ratings" || $this->uri->segment(1) == "rating")  echo "active"; ?>"><a href="<?php echo base_url('employee') ?>"><i class="fa fa-users"></i> <span>Pegawai</span></a></li>
                <!-- /rating-->
                <li class="<?php if ($this->uri->segment(1) == "ranking")  echo "active"; ?>"><a href="<?php echo base_url('ranking') ?>"><i class="fa fa-circle-o"></i> <span>Perhitungan WP</span></a></li>
                <!-- /user-->
            <?php } elseif ($this->session->userdata('role_id') == 3) { ?>              
                <li class="header">MAIN NAVIGATION</li>
                <li class="<?php if ($this->uri->segment(1) == "home")  echo "active"; ?>"><a href="<?php echo base_url('/') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                <!-- /employee-->
                
                <li class="<?php if ($this->uri->segment(1) == "employee" || $this->uri->segment(1) == "ratings" || $this->uri->segment(1) == "rating")  echo "active"; ?>"><a href="<?php echo base_url('employee') ?>"><i class="fa fa-users"></i> <span>Pegawai</span></a></li>                
                <li class="<?php if ($this->uri->segment(1) == "report")  echo "active"; ?>"><a href="<?php echo base_url('report') ?>"><i class="fa fa-circle-o text-aqua"></i> <span>Laporan</span></a></li>
                <li class="<?php if ($this->uri->segment(1) == "division_chart")  echo "active"; ?>"><a href="<?php echo base_url('division_chart') ?>"><i class="fa fa-laptop"></i> <span>Grafik</span></a></li>            
            <?php } elseif ($this->session->userdata('role_id') == 4 || $this->session->userdata('role_id') == 5) { ?>
                <li class="header">MAIN NAVIGATION</li>
                <li class="<?php if ($this->uri->segment(1) == "home")  echo "active"; ?>"><a href="<?php echo base_url('/') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                <!-- /employee-->
               
                <li class="<?php if ($this->uri->segment(1) == "employee_report")  echo "active"; ?>"><a href="<?php echo base_url('employee_report') ?>"><i class="fa fa-circle-o text-aqua"></i> <span>Laporan</span></a></li>
            <?php } ?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>