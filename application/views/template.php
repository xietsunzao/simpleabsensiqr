

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Demo</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?php echo base_url() ?>template/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>template/bootstrap/css/custom-button.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>template/font-awesome-4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>template/plugins/datatables/dataTables.bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>template/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>template/dist/css/skins/_all-skins.min.css">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
          <header class="main-header">
              <!-- Logo -->
              <a href="#" class="logo">
                  <!-- mini logo for sidebar mini 50x50 pixels -->
                  <span class="logo-mini"><b>S</b>D</span>
                  <!-- logo for regular state and mobile devices -->
                  <span class="logo-lg"><b>SCAN DEMO</b></span>
              </a>
              <!-- Header Navbar: style can be found in header.less -->
              <nav class="navbar navbar-static-top" role="navigation">
                  <!-- Sidebar toggle button-->
                  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </a>
                  <div class="navbar-custom-menu">
                      <ul class="nav navbar-nav">
                        <li class="dropdown messages-menu">
                              <!-- Menu toggle button -->
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php
                                if(function_exists ('date_default_timezone_set'))
                                date_default_timezone_set('Asia/Jakarta');
                                ?>
                                 <span id="clock">&nbsp;</span>
                              </a>
                       </li>
                          <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url()?>template/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                  <span class="hidden-xs">Welcome, <?=$user->first_name?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo base_url()?>template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                    <p>
                                       <?=$user->first_name.' '.$user->last_name?>
                                       <small>Member since <?=date('M, Y', $user->created_on)?></small>
                                   </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo base_url(('users/update/').$users->id); ?>" class="btn btn-default btn-lg">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <?php
                                        echo anchor('auth/logout','Sign out',array('class'=>'btn btn-default btn-lg'));
                                        ?>
                                    </div>
                                </li>
                            </ul>
                        </li>
                          <!-- Control Sidebar Toggle Button -->
                          <li>
                              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                          </li>
                      </ul>
                  </div>
              </nav>
          </header>
          <!-- Left side column. contains the logo and sidebar -->
          <aside class="main-sidebar">
              <!-- sidebar: style can be found in sidebar.less -->
              <section class="sidebar">
                  <!-- Sidebar user panel -->
                  <div class="user-panel">
                      <div class="pull-left image">
                          <img src="<?php echo base_url()?>template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <div class="pull-left info">
                          <p>Scan</p>
                      </div>
                  </div>
                  <!-- search form -->
                  <form action="#" method="get" class="sidebar-form">
                      <div class="input-group">
                      </div>
                  </form>
                  <!-- /.search form -->
                  <!-- sidebar menu: : style can be found in sidebar.less -->
                  <ul class="sidebar-menu">
                      <li>
                          <a href="<?php echo base_url('dashboard') ?>">
                              <i class="fa fa-laptop"></i> <span>DASHBOARD</span>
                          </a>
                          <a href="<?php echo base_url('karyawan') ?>">
                              <i class="fa fa-user"></i> <span>DATA</span>

                          </a>
                          <a href="<?php echo base_url('genbar') ?>">
                              <i class="fa fa-qrcode"></i> <span>AMBIL QR</span>

                          </a>
                          <a href="<?php echo base_url('scan1') ?>">
                              <i class="fa fa-camera"></i> <span>SCAN</span>

                          </a>
                          <a href="<?php echo base_url('presensi') ?>">
                              <i class="fa fa-list"></i> <span>RESULT</span>

                          </a>
                      </li>

                  </ul>
              </section>
              <!-- /.sidebar -->
          </aside>
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <section class="content-header">
                  <h1>
                    Dashboard
                  </h1>
                  <ol class="breadcrumb">
                      <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                      <li><a href="#">Tables</a></li>
                      <li class="active">Data tables</li>
                  </ol>
              </section>
              <?php
                      echo $contents;
              ?>
          </div><!-- /.content-wrapper -->
          <footer class="main-footer">
              <div class="pull-right hidden-xs">
                  <b>Version</b> 2.3.0
              </div>
              <strong> &copy; 2019 <a href="#">PT Karya Alam Mandiri</a>.</strong> All rights reserved.
          </footer>
          <!-- Add the sidebar's background. This div must be placed
               immediately after the control sidebar -->
               <aside class="control-sidebar control-sidebar-dark">
                 <!-- Create the tabs -->
                 <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                 </ul>
                 <!-- Tab panes -->
                 <div class="tab-content">
                   <!-- Home tab content -->
                   <div class="tab-pane" id="control-sidebar-home-tab">
                   </div>
                 </div>
               </aside>
               <!-- /.control-sidebar -->
               <!-- Add the sidebar's background. This div must be placed
                    immediately after the control sidebar -->
               <div class="control-sidebar-bg"></div>
             </div>
          <!-- ./wrapper -->
        <!-- jQuery 2.1.4 -->
        <script type="text/javascript" src="<?php echo base_url() ?>template/dist/js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>template/bootstrap/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="<?php echo base_url() ?>template/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url() ?>template/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>template/plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url() ?>template/dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url() ?>template/dist/js/demo.js"></script>
        <script src="<?php echo base_url() ?>template/plugins/sweetalert/sweetalert.min.js"></script>
        <script>
        <?= $this->session->flashdata('messageAlert'); ?>
        </script>
        <script type="text/javascript">
          var d = new Date();
          var hours = d.getHours();
          var minutes = d.getMinutes();
          var seconds = d.getSeconds();
          var hari = d.getDay();
          var namaHari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
          hariIni = namaHari[hari];
          var tanggal = ("0" + d.getDate()).slice(-2);
          var month = new Array();
          month[0] = "Januari";
          month[1] = "Februari";
          month[2] = "Maret";
          month[3] = "April";
          month[4] = "Mei";
          month[5] = "Juni";
          month[6] = "Juli";
          month[7] = "Agustus";
          month[8] = "September";
          month[9] = "Oktober";
          month[10] = "Nopember";
          month[11] = "Desember";
          var bulan = month[d.getMonth()];
          var tahun = d.getFullYear();
          var date = Date.now(),
          second = 1000;
          function pad(num) {
            return ('0' + num).slice(-2);
            }
          function updateClock() {
              var clockEl = document.getElementById('clock'),
              dateObj;
              date += second;
              dateObj = new Date(date);
              clockEl.innerHTML = '' + hariIni + '.  ' + tanggal + ' ' + bulan + ' ' + tahun + '. ' + pad(dateObj.getHours()) + ':' + pad(dateObj.getMinutes()) + ':' + pad(dateObj.getSeconds());
          }
          setInterval(updateClock, second);
      </script>
    </body>
</html>
