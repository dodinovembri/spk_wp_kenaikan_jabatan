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
                <li class="active">Ubah Password</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Ubah Password</h3>
                        </div>

                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="<?php echo base_url('user/store_password') ?>" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                                <input type="hidden" name="user_id_changed" value="<?php echo $user_id_changed; ?>">
                                <div class="form-group">
                                    <label for="nik">Password Baru</label>
                                    <input type="password" name="password" style="width: 95%; display:inline-block" class="form-control" id="pass" placeholder="Masukkan password" required> &nbsp;
											<span id="mybutton" onclick="change()"><i class="glyphicon glyphicon-eye-open"></i></span>
                                </div>
                                <div class="form-group">
                                    <label for="name">Konfirmasi Password</label>
                                    <input type="password" style="width: 95%; display:inline-block" name="password_confirm" class="form-control" id="pass2" placeholder="Masukkan konfirmasi password" required> &nbsp;
											<span id="mybutton2" onclick="change2()"><i class="glyphicon glyphicon-eye-open"></i></span>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="<?php echo base_url('user') ?>"><button type="button" class="btn btn-danger">Batal</button></a>
                                </div>
                        </form>

                    </div>
                </div>
        </section>

        <script>
            function change() {
                var x = document.getElementById('pass').type;

                if (x == 'password') {
                    document.getElementById('pass').type = 'text';
                    document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-close"></i>';
                } else {
                    document.getElementById('pass').type = 'password';
                    document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-open"></i>';
                }
            }

            function change2() {
                var x = document.getElementById('pass2').type;

                if (x == 'password') {
                    document.getElementById('pass2').type = 'text';
                    document.getElementById('mybutton2').innerHTML = '<i class="glyphicon glyphicon-eye-close"></i>';
                } else {
                    document.getElementById('pass2').type = 'password';
                    document.getElementById('mybutton2').innerHTML = '<i class="glyphicon glyphicon-eye-open"></i>';
                }
            }
        </script>
        <!-- /.content-wrapper -->
    </div>
    <?php $this->load->view('components/footer'); ?>

</div>