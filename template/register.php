<?php include('includes/header.php');?>

<div class="container">
    <div class="row text-center">
        <h1>Daftar ke Keluhanku</h1>
        <p>Saya ingin mendaftar ke Keluhanku sebagai:</p>
    </div>
    <br>
    <div class="row">
        <div class="col-md-2 col-md-offset-4 text-center">
            <a href="#" data-toggle="collapse" data-target="#collapsePelapor" aria-expanded="false" aria-controls="collapsePelapor">
                <img src="assets/images/pelapor-icon.png" width="125" class="well signup-form" alt="">
                <h2 class="heading-member-type" style="margin-top: -10px;">Pelapor</h2>
            </a>
        </div>
        <div class="col-md-2 text-center">
            <a href="#" data-toggle="collapse" data-target="#collapseRelawan" aria-expanded="false" aria-controls="collapseRelawan">
                <img src="assets/images/volunteer-icon.png" width="125" class="well signup-form" alt="">
                <h2 class="heading-member-type" style="margin-top: -10px;">Relawan</h2>
            </a>
        </div>
    </div>
    <div class="row collapse" id="collapsePelapor">
    <hr>
        <div class="col-md-8 col-md-offset-2 text-center">
            <h1>Mendaftar Sebagai Pelapor <br><small>Apa sih keuntungan mendaftar sebagai pelapor?</small> </h1>
            <p>
                Pelapor dapat melaporkan permasalahan secara langsung melalui SMS yang dapat dilakukan langsung di web
            </p>
            <h3>Form Registrasi</h3>
            <div class="well signup-form">
                    <form>
                        <label for="">Informasi Login</label>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control input-md placeholder-center" placeholder="Alamat Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control input-md placeholder-center" placeholder="Password">
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Foto Profil</label>
                                    <div class="kv-avatar center-block" style="width:200px">
                                       <input id="avatar" name="foto" type="file" class="file-loading">
                                   </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label for="">Informasi Data Diri</label>
                                <div class="form-group">
                                  <input type="text" name="nama_lengkap" class="form-control input-md"  placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="no_hp" class="form-control input-md"  placeholder="No. Handphone">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="no_ktp" class="form-control input-md" placeholder="NIK (Nomor Induk Kependudukan)">
                                </div>
                                <div class="form-group">
                                    <textarea name="biografi" class="form-control" cols="30" rows="10" placeholder="Deskripsikan diri anda..."></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="checkbox pull-right">
                                <input type="checkbox"> Saya setuju dengan <a href="#">Ketentuan Pengguna</a>
                        </div>
                      <button type="submit" class="btn btn-primary btn-block btn-lg">Daftarkan</button>
                    </form>
            </div>
        </div>
    </div>
    <div class="row collapse" id="collapseRelawan">
    <hr>
        <div class="col-md-8 col-md-offset-2 text-center">
            <h1>Mendaftar Sebagai Relawan <br><small>Apa sih keuntungan mendaftar sebagai relawan?</small> </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, ullam, omnis! Tempore iste doloremque nulla, sit harum, asperiores ullam, laborum sequi placeat aspernatur earum natus, rerum a quibusdam quisquam ipsam quas. At, facere dolor delectus similique ullam. Quibusdam temporibus consequatur, et tempore beatae dolorum eveniet perspiciatis, iure corrupti fugiat. Harum doloribus ratione, hic, pariatur soluta facilis nam reprehenderit vitae adipisci dolorem ducimus quisquam modi blanditiis maxime asperiores dolore repudiandae laudantium alias corporis nemo fuga! Quibusdam est voluptatum, accusantium non aut accusamus maxime laborum tempore quod illum totam aliquid, consequuntur eaque officiis voluptate maiores, alias qui iure? Natus omnis impedit rerum.</p>

            <h3>Form Registrasi</h3>
            <div class="well signup-form">
                    <form>
                        <label for="">Informasi Login</label>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control input-md placeholder-center" placeholder="Alamat Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control input-md placeholder-center" placeholder="Password">
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Foto Profil</label>
                                    <div class="kv-avatar center-block" style="width:200px">
                                       <input id="avatar2" name="foto" type="file" class="file-loading">
                                   </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label for="">Informasi Data Diri</label>
                                <div class="form-group">
                                  <input type="text" name="nama_lengkap" class="form-control input-md"  placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="no_hp" class="form-control input-md"  placeholder="No. Handphone">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="no_ktp" class="form-control input-md" placeholder="NIK (Nomor Induk Kependudukan)">
                                </div>
                                <div class="form-group">
                                    <textarea name="biografi" class="form-control" cols="30" rows="10" placeholder="Deskripsikan diri anda..."></textarea>
                                </div>
                            </div>
                        </div>
                        
                        <div class="checkbox pull-right">
                                <input type="checkbox"> Saya setuju dengan <a href="#">Ketentuan Pengguna</a>
                        </div>
                      <button type="submit" class="btn btn-primary btn-block btn-lg">Daftarkan</button>
                    </form>
            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php');?>
