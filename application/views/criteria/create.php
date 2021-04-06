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
              <h3 class="box-title">Tambah Data Criteria</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputCriteriaName">Criteria Name</label>
                  <input type="text" class="form-control" id="exampleInputCriteriaName" placeholder="Enter CriteriaName">
                </div>
                <div class="form-group">
                  <label for="exampleInputBobot">Bobot</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Password">
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

 
         