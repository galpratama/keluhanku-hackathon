<div class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumbs-list">
            <li class="breadcrumbs-item breadcrumbs-item--first">
                <a href="#">Beranda</a>
            </li>
            <li class="breadcrumbs-item breadcrumbs-item--mid">
                <a href="#">Permasalahan</a>
            </li>
            <li class="breadcrumbs-item breadcrumbs-item--mid">
                <a href="#"><span class="label label-danger">HOT</span> Kabut Asap</a>
            </li>
            <li class="breadcrumbs-item breadcrumbs-item--last breadcrumbs-item--here">
                Palembang
            </li>
        </ul>
    </div>
</div>

<div class="clearfix"></div>

<div class="row listing-header">
    <section class="block">
        <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
                <div class="active item">
                    <img src="<?php echo base_url();?>assets/cover/<?php echo $masalah['cover_image'] ?>" alt="Slide1" />
                </div>
            </div>
        </div>
    </section>
    <div class='description'>
        <div class="container">
            <p class='description_content'>
                <?php echo $masalah['hastag'] ?>
                <br>
                <span class="listing-features">
                    <i class="fa fa-twitter"></i> <span class="listing-count">1723</span>
                </span>
                <span class="listing-features">
                    <i class="fa fa-smile-o"></i> <span class="listing-count">24</span>
                </span>
                <span class="listing-features">
                    <i class="fa fa-frown-o"></i> <span class="listing-count">15</span>
                </span>
                <span class="listing-features">
                    <i class="fa fa-warning"></i> <span class="listing-count">12</span>
                </span>
            </p>
        </div>
    </div>
</div>


<div class="container ">
    <div class="row">
        <div class="col-md-8 listing-content">
            <h3><?php echo $masalah['nama_masalah'] ?></h3>
            <p><?php echo $masalah['deskripsi'] ?>.</p>

            <hr>

            <h4><i class="fa fa-twitter"></i> Keluhan dari Warga (via Twitter)</h4>
            <p>
            <div class="media media-tweet">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="<?php echo base_url();?>assets/images/dummy-agent.png" data-holder-rendered="true" style="width: 64px; height: 64px;">
                    </a>
                </div>
                <div class="media-body">
                    <h5 class="media-heading">Galih Pratama (@galpratama)
                        <small class="pull-right">10 Desember 2015</small></h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. 
                </div>
            </div>
            <div class="media media-tweet">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="<?php echo base_url();?>assets/images/dummy-agent.png" data-holder-rendered="true" style="width: 64px; height: 64px;">
                    </a>
                </div>
                <div class="media-body">
                    <h5 class="media-heading">Galih Pratama (@galpratama)
                        <small class="pull-right">10 Desember 2015</small></h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. 
                </div>
            </div>
            <div class="media media-tweet">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="<?php echo base_url();?>assets/images/dummy-agent.png" data-holder-rendered="true" style="width: 64px; height: 64px;">
                    </a>
                </div>
                <div class="media-body">
                    <h5 class="media-heading">Galih Pratama (@galpratama)
                        <small class="pull-right">10 Desember 2015</small></h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. 
                </div>
            </div>
            <div class="media media-tweet">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="<?php echo base_url();?>assets/images/dummy-agent.png" data-holder-rendered="true" style="width: 64px; height: 64px;">
                    </a>
                </div>
                <div class="media-body">
                    <h5 class="media-heading">Galih Pratama (@galpratama)
                        <small class="pull-right">10 Desember 2015</small></h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. 
                </div>
            </div>
            <div class="media media-tweet">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="<?php echo base_url();?>assets/images/dummy-agent.png" data-holder-rendered="true" style="width: 64px; height: 64px;">
                    </a>
                </div>
                <div class="media-body">
                    <h5 class="media-heading">Galih Pratama (@galpratama)
                        <small class="pull-right">10 Desember 2015</small></h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. 
                </div>
            </div>

            </p>
            <br>
            <h4><i class="fa fa-comment"></i> Keluhan dari Warga (via SMS)</h4>
            <p>

            <?php
            foreach ($inbox->result() as $i){?>
            <div class="media media-tweet">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="<?php echo base_url();?>assets/images/dummy-sms.png" data-holder-rendered="true" style="width: 64px; height: 64px;">
                    </a>
                </div>
                <div class="media-body">
                    <h5 class="media-heading"><?php echo substr($i->SenderNumber,0,10);?>xxx
                        <small class="pull-right">10 Desember 2015</small></h5>
                    <?php echo $i->TextDecoded;?>
                </div>
            </div>
            <?php } ?>
            
            
            


            </p>
        </div>

        <div class="col-md-4">
            <div class="agent-information">
                <img src="<?php echo base_url();?>assets/images/info-icon.jpg" class="agent-picture img-circle">
                <div class="agent-details">
                    <h3>Informasi Pemasalahan</h3>
                    <p>Pada permasalahan Kabut Asap di Palembang ini, ada beberapa pihak terkait yang anda bisa hubungi langsung untuk keluhan dan bantuan dengan mengklik instansi dibawah ini.</p>
                    <p>
                        <a class="btn btn-default btn-block" data-toggle="collapse" data-target="#collapseInstansi1" aria-expanded="false" aria-controls="collapseInstansi1"> Pemadam Kebakaran Palembang</a>
                        <a href="#" class="btn btn-default btn-block"> Rumah Sakit Umum Palembang</a>

                    </p>
                </div>
            </div>
            <div class="agent-contact collapse" id="collapseInstansi1">
                <h4>Pemadam Kebakaran Palembang</h4>
                <p>
                    Dinas Pemadam Kebakaran DKI Jl. K.H.Zainul Arifin No. 71 <br>
                    Telepon : 6330325, 6341425, 6342036, 6340580.
                </p>
                <a href="#" class="btn btn-primary btn-block btn-lg btn-normal">
                    <i class="fa fa-twitter"></i> Tulis Keluhan
                </a>
                <a href="#" class="btn btn-default btn-block btn-md btn-normal">
                    <i class="fa fa-envelope"></i> Kontak Dinas Terkait
                </a>
                <a href="#" class="btn btn-default btn-block btn-md btn-danger">
                    <i class="fa fa-warning"></i> Saya Butuh Bantuan Segera
                </a>
            </div>
        </div>
    </div>
</div>












