<div class="container" id="homepage-content">
    <h3>HASIL PENCARIAN</h3>
    
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