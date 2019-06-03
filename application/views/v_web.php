
<body class="hold-transition skin-blue layout-top-nav" onLoad="pindah()">
    <div class="container">
      <section class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">GENERATE QRCODE</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">INPUT NIK DI SINI</label>
                  <input type="text" onChang="redy()" id="id" class="form-control" placeholder="Masukkan NIK yang terdaftar di Data Karyawan">
                </div>
              </div>
                <div class="box-footer">
                <button onClick="redy()" onFocus="redy()" type="button" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </div>
            <div class="col-md-6">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">INFORMASI QRCODE AKAN MUNCUL DISINI</h3>
                </div>
                <div class="box-body ajax-content" id="showR">
                </div>
              </div>
            </div>
        </div>
      </section>
    </div>
      <script type="text/javascript">
        function pindah(){
          $('#id').focus();
          };
        function redy(){
          var id= $('#id').val();
          $.ajax({
                      type: 'POST',
                      url : '<?php echo base_url('/GenBar/showw')?>',
                      data:  `id=${id}`,
                      beforeSend : function(msg){
                      $('#showR').html('<h1><i class="fa fa-spin fa-refresh" /></h1>');
                  },
                  success: function(msg){
                  $('#showR').html(msg);
                  $('#id_karyawan').focus();
                    }
              });
          }
      </script>
    </body>
</html>
