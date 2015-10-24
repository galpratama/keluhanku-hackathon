        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                    <?php echo anchor('masalah/add','<i class="fa fa-file-word-o"></i> Tambah Issue Masalah',array('class'=>'btn btn-danger btn-sm')); ?>
                  </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>MULAI</th>
                        <th>SELESAI</th>
                        <th>HASTAG</th>
                        <th>STATUS</th>
                        <th width="104"></th>
                      </tr>
                    </thead>
                    <?php
                    if($list->num_rows()<1)
                    {
                        echo "<tr><td colspan='3'>TIDAK ADA DATA</td></tr>";
                    }else{
                        $no=1;
                        foreach ($list->result() as $r)
                        {
                            $status = $r->status==1?'Aktif':'Selesai';
                        echo "
                            <tr>
                            <td width='10'>".$no++."</td>
                            <td>".tgl_indo($r->start_date)."</td>
                            <td>".tgl_indo($r->end_date)."</td>
                            <td>$r->hastag</td>
                            <td>$status</td>
                            <td>
                            ".anchor('masalah/edit/'.$r->masalah_id,'<i class="fa fa-pencil-square-o"></i> Edit',array('class'=>'btn btn-danger btn-sm"'))."
                            ".anchor('masalah/delete/'.$r->masalah_id,'<i class="fa fa-trash-o"></i> Hapus',array('class'=>'btn btn-danger btn-sm"'))."
                            </td>
                      </tr>";
                        }
                    }
                    ?>
                    <tbody>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->