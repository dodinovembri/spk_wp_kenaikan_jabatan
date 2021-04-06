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
              <h3 class="box-title">Add Employee Data</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post">
              <div class="box-body">
              <div class="form-group">
                  <label for="nik">Nik</label>
                  <input type="text" name="nik" class="form-control" id="nik" placeholder="Enter nik">
                </div>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <input type="text" name="gender" class="form-control" id="gender" placeholder="Enter gender">
                </div>
                <div class="form-group">
                  <label for="location">Location</label>
                  <input type="text" name="location" class="form-control" id="location" placeholder="Enter location">
                </div>
                <div class="form-group">
                  <label for="position">Position</label>
                  <input type="text" name="position" class="form-control" id="position" placeholder="Enter position">
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

 
         