<style media="screen">
  table,th,tr,td{
    text-align: center;
  }
</style>
        <!-- Main content -->
        <section class='content'>
           <div class='row'>
              <div class='col-xs-12'>
                 <div class='box'>
                    <div class='box-header'>
                    </div><!-- /.box-header -->
                       <div class='box-body'>
                          <table class="table table-bordered table-striped" id="mytable">
                             <thead>
                                <tr>
                                   <th>No</th>
		                               <th>NIK</th>
                                   <th>Nama</th>
		                               <th>Tanggal</th>
		                               <th>Jam Masuk</th>
		                               <th>Jam Keluar</th>
		                               <th width="30px">Kehadiran</th>
                                   <th width="25px">status </th>
                                 </tr>
                              </thead>
	                            <tbody>
                                  <?php
                                  $start = 0;
                                     foreach ($presensi_data as $presensi)
                                       {  ?>
                                <tr>
		                                 <td><?php echo ++$start ?></td>
		                                 <td><?php echo $presensi->id_karyawan ?></td>
                                     <td><?php echo $presensi->nama_karyawan ?></td>
		                                 <td><?php echo $presensi->tgl ?></td>
		                                 <td><?php echo $presensi->jam_msk ?></td>
		                                 <td><?php echo $presensi->jam_klr ?></td>
		                                 <td><?php echo $presensi->nama_khd ?></td>
                                     <td><?php if ($presensi->id_status == 1) { ?>
                                        <h4><span class="label label-success"> <?php echo $presensi->nama_status ?></span></h4>
                                      <?php } else if ($presensi->id_status == 2) { ?>
                                        <h4><span class="label label-danger"> <?php echo $presensi->nama_status ?> </span></h4>
                                      <?php  } else { ?>
                                        <h4><span class="label label-default"> <?php echo $presensi->nama_status ?> </span></h4>
                                      <?php } ?>
                                    </td>
	                                </tr>
                                <?php  }  ?>
                            </tbody>
                        </table>
                         <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
                          <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
                          <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
                          <script type="text/javascript">
                             $(document).ready(function () {
                                $("#mytable").dataTable();
                              });
                          </script>
                      </div><!-- /.box-body -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
        </div><!-- /.row -->
  </section><!-- /.content -->
