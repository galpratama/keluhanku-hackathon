        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">PESAN MASUK</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>PENGIRIM</th>
                        <th>WAKTU</th>
                        <th>PESAN</th>
                        <th>PERIORITY</th>
                        <th>STATUS</th>
                        <th width='110'></th>
                      </tr>
                    </thead>
                    <?php
                    if($inbox->num_rows()<1)
                    {
                        echo "<tr><td colspan='5'>PESAN MASUK TIDAK ADA</td></tr>";
                    }else{
                        $no=1;
                        foreach ($inbox->result() as $i)
                        {
                            $prioriti = 1;
                            if($prioriti==1)
                            {
                                $color = "label label-danger";
                            }elseif($prioriti==2)
                            {
                                $color="label label-succes";
                            }else{
                                $color="label label-info";
                            }
                         echo "<tr>
                        <td width='10'>".$no++."</td>
                        <td>$i->SenderNumber</td>
                        <td>$i->ReceivingDateTime</td>
                        <td>$i->TextDecoded</td>
                       
                        <td><span class='$color'>URGENT</span></td>
                        <td>FINISH</td>
                        <td>
                        ".anchor('inbox/read/'.$i->ID,'<i class="fa fa-eye"></i> Baca',array('class'=>'btn btn-danger btn-sm'))."
                        ".anchor('inbox/delete/'.$i->ID,'<i class="fa fa-trash-o"></i> Hapus',array('class'=>'btn btn-danger btn-sm"'))."
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