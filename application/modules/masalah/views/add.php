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
                        <?php echo form_open_multipart('masalah/add'); ?>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama Issue Masalah</label>
                                <input type="text" name="nama"  class="form-control" placeholder="Masukan issue">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kategori Masalah</label>
                                <select name="kategori" class="form-control">
                                    <?php
                                    foreach ($kategori->result() as $k)
                                    {
                                        echo "<option value='$k->kategori_id'>".  strtoupper($k->kategori_masalah)."</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Range Waktu</label>
                                <input type="text" name="mulai"  class="form-control" placeholder="Mulai" >
                                <input type="text" name="selesai"  class="form-control" placeholder="Selesai">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Deskripsi</label>
                                <textarea  name="deskripsi" class="form-control" placeholder="Tulis Deskripsi"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hastag</label>
                                <input type="text" name="hastag"  class="form-control" placeholder="example : #gempaBumi">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Cover</label>
                                <input type="file" name="userfie" class="form-control" placeholder="Masukan Nama Group">
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                            <?php echo anchor('group', '<i class="fa fa-sign-out"></i> Kembali</a>', array('class' => 'btn btn-primary btn-sm')); ?>
                        </div>
                        </form>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->