
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

<section class='content'>

          <div class="container text-center" id="QR-Code ">
              <div class="panel panel-info">
                  <div class="panel-heading">
                      <div class="navbar-form navbar-left">
                          <h4>Arahkan QR Code ke kamera</h4>
                      </div>
                      <div class="navbar-form navbar-center">
                          <select class="form-control" id="camera-select"></select>
                      </div>
                  </div>
                  <div class="panel-body text-center">
                      <div class="col-md-11 ">
                          <div class="well" style="position: middle;">
                              <canvas width="400" height="400" id="webcodecam-canvas"></canvas>
                              <div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
                              <div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
                              <div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
                              <div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
                          </div>
                      </div>
                  </div>
                  <script type="text/javascript" src="<?php echo base_url() ?>template/dist/js/jquery.min.js"></script>
                  <script src="<?php echo base_url() ?>assets/js/qrcodelib.js"></script>
                  <script src="<?php echo base_url() ?>assets/js/webcodecamjquery.js"></script>
                  <script src="<?php echo base_url() ?>assets/app/core/scan.js"></script>
                </div><!-- /.box-body -->

              </section><!-- /.content -->
              <script src="<?php echo base_url() ?>template/plugins/sweetalert/sweetalert.min.js"></script>
              <script>
              <?= $this->session->flashdata('messageAlert'); ?>
              </script>
