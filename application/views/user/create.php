<div class="wrapper">

  <?php $this->load->view('components/header'); ?>
  <?php $this->load->view('components/sidebar'); ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><small></small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
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
            <form role="form" action="" method="post">
              <div class="box-body">
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="role_id">Role_id</label>
                  <input type="number" name="role_id" class="form-control" id="role_id" placeholder="Enter role">
                </div>
               
                <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
              
            </div>
            </div>
            </section>
         
        
  <!-- /.content-wrapper -->
    </div>
           <?php $this->load->view('components/footer'); ?>

</div>

 
         