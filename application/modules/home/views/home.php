<div class="yarumah-header">
    <div class="container">
        <h1>Laporkan Permasalahan di Kota-mu</h1>
        <p>Keluhanku adalah sarana masyarakat untuk melaporkan permasalahan dengan mudah.</p>
        <div class="row ">
            <div class="col-md-8 col-md-offset-2 yarumah-form">
           <?php echo form_open('home/search');?>
                <div class="clearfix add-bottom-margin"></div>
                <div class="col-md-12">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control input-xl search-box" placeholder="Cari keluhanmu : Mis: ''Kabut Asap Palembang''">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-primary btn-xl btn-search">Cari</button>
                        </div><!-- /btn-group -->
                    </div>
                </div>
                <div class="clearfix add-bottom-margin"></div>
                <div class="clearfix add-bottom-margin"></div>
                </form>
            </div>
        </div>
      </div>
    </div>
<div class="container" class="text-center" id="homepage-content">
    <h3>APA SIH KELUHANKU ITU?</h3><br><br>
<center>
    <div class="col-md-4">
        <img src="<?php echo base_url()?>assets/images/city-featured-icon.png" alt="" width="128" height="128"> 
        <h3 class="text-center" style="padding-bottom: 0px;">Laporkan Permasalahan Kota</h3>
        <p class="text-center">Laporkan Permasalahan di dalam Kota anda dengan mendaftar menjadi pelapor. Ayo bantu mewakili suara masyarakat dengan kontribusi ke Keluhanku</p>
    </div>
    <div class="col-md-4">
        <img src="assets/images/volunteer-featured-icon.png" alt="" width="128" height="128">
        <h3 class="text-center" style="padding-bottom: 0px;">Berkontribusi Menjadi Relawan</h3>
        <p class="text-center">Ingin langsung terjun ke lapangan untuk memantau permasalahan di kota kamu? Ayo daftar menjadi relawan untuk dapat mengajukan permasalahan Kota-mu! </p>
    </div>
    <div class="col-md-4">
        <img src="assets/images/smile-featured-icon.png" alt="" width="128" height="128">
        <h3 class="text-center" style="padding-bottom: 0px;">Membantu Indonesia Lebih Baik</h3>
        <p class="text-center">Ayo bantu Indonesia menjadi Indonesia yang lebih baik. Kalau bukan mulai dari kamu, dari siapa lagi? Ayo kontribusi sekarang juga!</p>
    </div>
</center>
</div>
<hr>
<div class="container" id="homepage-content">
    <h3>KELUHAN PALING RAMAI DIBICARAKAN</h3>
    
    <div class="clearfix"></div>
    <div class="clearfix"></div>
    
    <div class="row listings">
        <?php
        foreach ($masalah as $m){
        ?>
         <div class="col-md-6 col-sm-4 col-xs-6 listing-items">
            <div class="thumbnail">
                <div class="caption">
                   
                    <h4><?php echo anchor(base_url().'home/detail/'.$m->masalah_id,$m->nama_masalah);?></h4>
                    <p><?php echo $m->deskripsi?></p
                    <p>
                        <span class="listing-features">
                            1821 <i class="fa fa-twitter"></i>
                        </span>
                        <span class="listing-features">
                            5 <i class="fa fa-smile-o"></i>
                        </span>
                        <span class="listing-features">
                            2 <i class="fa fa-frown-o"></i>
                        </span>
                            <span class="listing-features">
                            12311 <i class="fa fa-eye"></i>
                        </span>
                    </p>
                </div>
                <img class="listing-images" src="<?php echo base_url()?>assets/cover/<?php echo $m->cover_image?>" alt="...">
            </div>
        </div>
        <?php
        }
        ?>

        
    </div>

    <div class="clearfix"></div>
    <br><br><br><br><br><br>
</div> <!-- /container -->
    

