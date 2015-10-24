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
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="bower_components/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Bootstrap Select -->
    <link href="bower_components/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet">

    <!-- Bootstrap Fileinput -->
    <link href="bower_components/bootstrap-fileinput/css/fileinput.min.css" rel="stylesheet">

    <!-- Main yaRumah styling -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/icomoon.css" rel="stylesheet">

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
          <a class="navbar-brand" href="index.php"><img src="assets/images/keluhanku.png"></a>
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
            <li><a href="register.php">Daftar</a></li>
            <li>
              <p class="navbar-btn">
                <a href="#"  data-toggle="modal" data-target="#modalLogin" class="btn btn-default btn-sm">Masuk</a>
              </p>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img class="img-circle" src="assets/images/dummy-agent.png" alt="" style="width: 20px; vertical-align: top;">&nbsp; Galih Pratama <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Keluar</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
