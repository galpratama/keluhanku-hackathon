        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">DAFTAR VOLUNTEER</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>NO</th>
                        <th>NAMA LENGKAP</th>
                        <th>NO HP</th>
                        <th>EMAIL</th>
                        <th>JUMLAH LAPORAN</th>
                        <TH>ALAMAT</th>
                        <TH>AKSI</th>
                      </tr>
                    </thead>
                    <?php
                    if($volunteer->num_rows()<1)
                    {
                        //echo "<tr><td colspan='6'>DATA PESAN KELUAR TIDAK ADA</td></tr>";
                    }else{
                        $no=1;
                        foreach ($volunteer->result() as $o)
                        {
                            echo "<tr>
                        <td width='10'>".$no++."</td>
                        <td>$o->nama_lengkap</td>
                        <td>$o->no_hp</td>
                        <td>$o->email</td>
                        <td>4</td>
                        <td>$o->alamat</td>
                        <td>
                        ".anchor('volunteer/read/'.$o->volunteer_id,'<i class="fa fa-eye"></i> BIODATA',array('class'=>'btn btn-danger btn-sm'))."
                        ". anchor('volunteer/delete/'.$o->volunteer_id,'<i class="fa fa-trash-o"></i> Hapus',array('class'=>'btn btn-danger btn-sm"'))."
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
