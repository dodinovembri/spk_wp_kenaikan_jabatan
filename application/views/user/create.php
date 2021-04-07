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
        <li class="active">Tambah Data</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Add User Data</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url('user/store') ?>" method="post">
              <div class="box-body">
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" class="form-control" id="email" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                  <label for="role_id">Role_id</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="role_id" id="role_id1" value="0" checked required> Administrator <br>
                      <input type="radio" name="role_id" id="role_id1" value="1" required> Leader <br>
                      <input type="radio" name="role_id" id="role_id1" value="2" required> Interviewer <br>
                      <input type="radio" name="role_id" id="role_id1" value="3" required> director <br>
                      <input type="radio" name="role_id" id="role_id1" value="4" required> employees
                    </label>
                  </div>
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

 
         