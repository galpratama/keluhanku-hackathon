    <hr>
    <div class="text-center">
    Dibuat untuk Hackathon Merdeka 2.0. Keluhanku merupakan kolaborasi antara : <br>
    <img src="assets/images/kolaborasi.png" alt="">
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
          <div class="modal-body full-width-tabs">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

          <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#tabPelapor" aria-controls="tabPelapor" role="tab" data-toggle="tab"><i class="fa fa-user"></i> Pelapor</a></li>
              <li role="presentation"><a href="#tabRelawan" aria-controls="tabRelawan" role="tab" data-toggle="tab"><i class="fa fa-user"></i> Relawan</a></li>
            </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="tabPelapor">
                <form role="form">
                    <fieldset>
                        <h2 class="text-center">Silahkan Masuk, Pelapor!</h2>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-lg input-login" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-lg input-login" placeholder="Password">
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <a href="register.php" class="btn btn-lg btn-primary btn-block">Register</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div role="tabpanel" class="tab-pane" id="tabRelawan">
                <form role="form">
                    <fieldset>
                        <h2 class="text-center">Silahkan Masuk, Relawan!</h2>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-lg input-login" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-lg input-login" placeholder="Password">
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <a href="register.php" class="btn btn-lg btn-primary btn-block">Register</a>
                            </div>
                        </div>
                    </fieldset>
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
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Javascript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Bootstrap Select -->
    <script src="bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>

    <!-- Bootstrap Fileinput -->
    <script src="bower_components/bootstrap-fileinput/js/fileinput.min.js"></script>

    <!-- Main Javascript File-->
    <script src="assets/scripts/main.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bower_components/bootstrap/dist/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
