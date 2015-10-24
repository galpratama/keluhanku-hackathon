        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">PESAN KELUAR</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>NO TUJUAN</th>
                        <th>WAKTU</th>
                        <th>PESAN</th>
                        <th>STATUS</th>
                        <th width="110"></th>
                      </tr>
                    </thead>
                    <?php
                    if($outbox->num_rows()<1)
                    {
                        //echo "<tr><td colspan='6'>DATA PESAN KELUAR TIDAK ADA</td></tr>";
                    }else{
                        $no=1;
                        foreach ($outbox->result() as $o)
                        {
                            echo "<tr>
                        <td width='10'>".$no++."</td>
                        <td>$o->DestinationNumber</td>
                        <td>$o->SendingDateTime</td>
                        <td>$o->TextDecoded</td>
                        <td>$o->Status</td>
                        <td>
                        ".anchor('outbox/read/'.$o->ID,'<i class="fa fa-eye"></i> Baca',array('class'=>'btn btn-danger btn-sm'))."
                        ". anchor('outbox/delete/'.$o->ID,'<i class="fa fa-trash-o"></i> Hapus',array('class'=>'btn btn-danger btn-sm"'))."
                        </td>
                      </tr>";
                        }
                    }
                    ?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->