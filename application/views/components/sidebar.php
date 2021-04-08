<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?php if ($this->uri->segment(1) == "home")  echo "active"; ?>"><a href="<?php echo base_url('/') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

            <!-- /employee-->

            <li class="header">TRANSACTIONS</li>
            <li class="<?php if ($this->uri->segment(1) == "employee")  echo "active"; ?>"><a href="<?php echo base_url('employee') ?>"><i class="fa fa-users"></i> <span>Pegawai</span></a></li>
            <!-- /rating-->

            <li><a href="<?php echo base_url('rating') ?>"><i class="fa fa-circle-o"></i> <span>Rating</span></a></li>

            <!-- /user-->

            <li class="header">SETTING CONFIGURATION</li>
            <li class="<?php if ($this->uri->segment(1) == "user")  echo "active"; ?>"><a href="<?php echo base_url('user') ?>"><i class="fa fa-circle-o text-aqua"></i> <span>Users</span></a></li>

            <!-- /criteria-->

            <li class="<?php if ($this->uri->segment(1) == "criteria" || $this->uri->segment(1) == "criterion_value")  echo "active"; ?>"><a href="<?php echo base_url('criteria') ?>"><i class="fa fa-laptop"></i> <span>Kriteria</span></a></li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>