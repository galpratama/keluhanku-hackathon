

<div class="container">
    <div class="row">
        <?php
        echo $this->session->userdata('pesan');
        ?>
        <div class="col-md-8 col-md-offset-2 text-center">
            <h1>Ajukan Permasalahan <br><small>Ajukan permasalahan yang ada pada daerah anda</small> </h1>
            <div class="well signup-form">
                    <?php echo form_open('home/submit_issue');?>
                        <div class="form-group">
                            <input type="text" name="judul" class="form-control input-md placeholder-center" placeholder="Judul Permasalahan">
                        </div>
                        <div class="form-group">
                            <textarea name="deskripsi" class="form-control" cols="30" rows="10" placeholder="Tuliskan Deskripsi Permasalahan"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" name="lokasi" class="form-control input-md placeholder-center" placeholder="Lokasi">
                        </div>
                        <div class="form-group">
                            <label class="radio-inline"><input type="radio" name="optradio" value="low">Low</label>
                            <label class="radio-inline"><input type="radio" name="optradio" value="medium">Medium</label>
                            <label class="radio-inline"><input type="radio" name="optradio" value="high">High</label>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg">Masukkan Permasalahan</button>
                    </form>
            </div>
        </div>
    </div>
</div>



