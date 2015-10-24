        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <?php echo anchor('phonebook/add','<i class="fa fa-file-word-o"></i> Tambah Data',array('class'=>'btn btn-danger btn-sm')); ?>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>NO HP</th>
                        <th>NAMA</th>
                        <th>GROUP</th>
                        <th width="104"></th>
                      </tr>
                    </thead>
                    <?php
                    if($list->num_rows()<1)
                    {
                        echo "<tr><td colspan='5'>TIDAK ADA DATA DITEMUKAN</td></tr>";
                    }else{
                        $no=1;
                        foreach ($list->result() as $l)
                        {
                        echo "<tr>
                        <td width='10'>".$no++."</td>
                        <td>$l->Number</td>
                        <td>$l->Name</td>
                        <td>-</td>
                        <td>
                        ".anchor('phonebook/edit/'.$l->ID,'<i class="fa fa-pencil-square-o"></i> Edit',array('class'=>'btn btn-danger btn-sm"'))."
                        ".anchor('phonebook/delete/'.$l->ID,'<i class="fa fa-trash-o"></i> Hapus',array('class'=>'btn btn-danger btn-sm"'))."
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