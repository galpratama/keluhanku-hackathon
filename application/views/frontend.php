<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Keluhanku - Laporkan Keluhan di Kota-mu</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url() ?>template/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="<?php echo base_url() ?>template/bower_components/fontawesome/css/font-awesome.min.css" rel="stylesheet">

        <!-- Bootstrap Select -->
        <link href="<?php echo base_url() ?>template/bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">

        <!-- Bootstrap Fileinput -->
        <link href="<?php echo base_url() ?>template/bower_components/bootstrap-fileinput/css/fileinput.min.css" rel="stylesheet">

        <!-- Main yaRumah styling -->
        <link href="<?php echo base_url() ?>template/assets/css/main.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>template/assets/css/icomoon.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url() ?>template/assets/images/keluhanku.png"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Permasalahan <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Penipuan</a></li>
                                <li><a href="#">Pelanggaran Lalu Lintas</a></li>
                                <li><a href="#">Keluhan Sakit</a></li>
                                <li><a href="#"><span class="label label-danger">HOT</span> <span style="font-family: 'Proxima Nova Bold'">Kabut Asap </span> </a></li>
                            </ul>
                        </li>
                        <li><a href="submit-issue.php">Ajukan Permasalahan</a></li>
                        <li><a href="about.php">Tentang</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if($this->session->userdata('login')!='oke'){
                        ?>
                        <li><?php echo anchor(base_url() . 'home/daftar', 'Daftar'); ?></li>
                        <li>
                            <p class="navbar-btn">
                                <a href="#"  data-toggle="modal" data-target="#modalLogin" class="btn btn-default btn-sm">Masuk</a>
                            </p>
                        </li>
                        <?php
                        }else{?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img class="img-circle" src="<?php echo base_url()?>assets/images/dummy-agent.png" alt="" style="width: 20px; vertical-align: top;">&nbsp; Galih Pratama <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Keluar</a></li>
                                <li><a href="#">Ubah Password</a></li>
                            </ul>
                        </li>
                        <?php } ?>
                    </ul>

                </div><!--/.nav-collapse -->
            </div>
        </nav>


        <?php
        echo $contents;
        ?>


        <hr>
        <div class="text-center">
            Dibuat untuk Hackathon Merdeka 2.0. Keluhanku merupakan kolaborasi antara : <br>
            <img src="<?php echo base_url() ?>template/assets/images/kolaborasi.png" alt="">
        </div>
        <br>
        <footer class="bottom-footer">
            <div class="container">
                <p>&copy; 2015 - Keluhanku</p>
            </div>
        </footer>

        <!-- Modal -->
        <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel">

            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="modalLoginLabel">Masuk ke Keluhanku</h4>
                    </div>
                    <div class="modal-body full-width-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tabPelapor" aria-controls="tabPelapor" role="tab" data-toggle="tab"><i class="fa fa-user"></i> Pelapor</a></li>
                            <li role="presentation"><a href="#tabRelawan" aria-controls="tabRelawan" role="tab" data-toggle="tab"><i class="fa fa-user"></i> Relawan</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tabPelapor">
                                <br>
                                <form>
                                    <div class="form-group">
                                        <label for="email">Alamat Email</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">Masuk</button>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tabRelawan">
                                <br>
                                <form>
                                    <div class="form-group">
                                        <label for="email">Alamat Email</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block btn-lg">Masuk</button>
                                    </div>
                                </form>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url() ?>template/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Javascript -->
        <script src="<?php echo base_url() ?>template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Bootstrap Select -->
        <script src="<?php echo base_url() ?>template/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>

        <!-- Bootstrap Fileinput -->
        <script src="<?php echo base_url() ?>template/bower_components/bootstrap-fileinput/js/fileinput.min.js"></script>

        <!-- Main Javascript File-->
        <script src="<?php echo base_url() ?>template/assets/scripts/main.js"></script>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php echo base_url() ?>template/bower_components/bootstrap/dist/<?php echo base_url() ?>template/assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
