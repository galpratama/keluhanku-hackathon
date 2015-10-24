        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
				<div class="box box-widget">
                <div class="box-header with-border">
                  <div class="user-block">
                      <img class="img-circle" src="<?php echo base_url()?>assets/dist/img/user1-128x128.jpg" alt="user image">
                    <span class="username"><a href="#"><?php echo $inbox_detail['SenderNumber'];?></a></span>
                    <span class="description"><?php echo $inbox_detail['ReceivingDateTime'];?></span>
                  </div><!-- /.user-block -->
                  <div class="box-tools">
                    <button class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read"><i class="fa fa-circle-o"></i></button>
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <!-- post text -->
                  <p><?php echo $inbox_detail['TextDecoded'];?></p>


              </div>
              <div class="box-footer">
              <h4>Balas Pesan</h4>
                  <?php echo form_open('inbox/reply');?>
                    <div>
                        <input type="hidden" name="hp" value="<?php echo $inbox_detail['SenderNumber'];?>">
                        <textarea name="pesan" class="form-control input-sm" placeholder="Tulis Pesan"> 	
                      </textarea>
                    </div>
                </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Kirim SMS</button>
                    <?php echo anchor('inbox','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->