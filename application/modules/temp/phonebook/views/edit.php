        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama Contact </label>
                      <input type="text" value="<?php echo $record['Name']?>" class="form-control" placeholder="Nama Contact">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">No HP</label>
                      <input type="text" value="<?php echo $record['Number']?>" class="form-control" placeholder="No HP">
                    </div>
                    <div class="form-group">
                     <label for="exampleInputPassword1">Group</label>
                    <select name="group" class="form-control">
                        <?php
                        foreach ($group as $g)
                        {
                            echo "<option value='$g->ID' ";
                            echo $g->ID==$record['GroupID']?"selected='selected'":"";
                            echo ">".  strtoupper($g->Name)."</option>";
                        }
                        ?>
                    </select>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('phonebook','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->