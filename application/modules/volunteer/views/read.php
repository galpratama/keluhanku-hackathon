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
                    <span class="username"><a href="#"><?php echo $outbox['DestinationNumber']?></a></span>
                    <span class="description"><?php echo $outbox['SendingDateTime']?></span>
                  </div><!-- /.user-block -->
                  <div class="box-tools">
                    <button class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read"><i class="fa fa-circle-o"></i></button>
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  <!-- post text -->
                  <p><?php echo $outbox['TextDecoded']?></p>


              </div>

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->