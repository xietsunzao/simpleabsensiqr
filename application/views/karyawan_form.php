        <section class='content'>
           <div class='row'>
              <div class='col-xs-12'>
                 <div class='box'>
                    <div class='box-header'>
                       <h3 class='box-title'>KARYAWAN</h3>
                          <div class='box box-primary'>
                              <form action="<?php echo $action; ?>" method="post">
                                  <table class='table table-bordered'>
                                      <tr>
                                          <td>NIK <?php echo form_error('id_karyawan') ?></td>
                                          <td><input type="text" class="form-control" name="id_karyawan" id="id_karyawan" placeholder="NIK" value="<?php echo $id_karyawan; ?>" /></td>
                                      </tr>
                                      <tr>
                                          <td>Nama Karyawan <?php echo form_error('nama_karyawan') ?></td>
                                          <td><input type="text" class="form-control" name="nama_karyawan" id="nama_karyawan" placeholder="Nama Karyawan" value="<?php echo $nama_karyawan; ?>" /></td>
                                      </tr>
                                      <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                      <tr>
                                          <td colspan='2'><button type="submit" class="btn btn-primary btn-lg"><?php echo $button ?></button>
                                              <a href="<?php echo site_url('karyawan') ?>" class="btn btn-default btn-lg">Cancel</a></td></tr>
                                  </table>
                              </form>
                          </div><!-- /.box-body -->
                      </div><!-- /.box -->
                  </div><!-- /.col -->
             </div><!-- /.row -->
      </section><!-- /.content -->
      <script src="<?php echo base_url() ?>template/plugins/sweetalert/sweetalert.min.js"></script>
      <script>
      <?= $this->session->flashdata('messageAlert'); ?>
      </script>
