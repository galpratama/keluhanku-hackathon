<script type="text/javascript">

    function getAll()
    {
        loadPhonebook();
        getTujuan();
    }


    function getTujuan()
    {
        $.ajax({
            type:"get",
            url :"outbox/getTujuan",
            data : "",
            success:function(html){
                {
                    $("#tujuan").html(html);
                }}
        });
    }


    function add(id)
    {
        $.ajax({
            type:"get",
            url :"outbox/addtemp",
            data : "id="+id,
            success:function(html){
                {
                    getTujuan();
                }}
        });
    }

    function loadPhonebook()
    {
        var id = $("#group").val();
        $.ajax({
            type:"get",
            url :"outbox/grouplist",
            data : "id="+id,
            success:function(html){
                {
                    $("#groupList").html(html);
                }}
        });
    }
</script> 

<body onload="getAll()">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-6">
                <div class="box">
                    <div class="box-header">
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="box box-primary">
                            <!-- form start -->
                            <?php
                            echo form_open('outbox/sms');
                            ?>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tulis Pesan</label>
                                    <textarea name="pesan" class="form-control" style="height:300px"></textarea>
                                </div>
                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Kirim Pesan</button>
                            </div>
                            </form>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->


            <div class="col-xs-6">
                <div class="box" style="height:470px">
                    <div class="box-header">
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="box box-primary">
                            <div class="col-xs-6">
                                <table class="table table-bordered">
                                    <tr><td>Group Phonebook</td></tr>
                                    <tr><td><select id="group" name="group" class="form-control" onChange='loadPhonebook()'>
                                        <?php
                                        foreach ($group as $g) {
                                            echo "<option value='$g->ID'>$g->Name</option>";
                                        }
                                        ?>
                                    </select></td></tr>
                                </table>
                                <div id="groupList"></div>

                            </div>
                     
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>List Penerima</label>
                                </div>
                                <br><br>
                                <div id="tujuan"></div>
                            </div>

                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->

            </div>

        </div><!-- /.row -->
    </section><!-- /.content -->



