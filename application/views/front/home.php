<?php
include 'tree/head.php';
include 'tree/navbar.php';
?>



    <!-- ABOUT -->
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <!-- <small class="small-text">Welcome to <span class="mobile-block">my portfolio website!</span></small> -->
                        <h1 class="animated animated-text">
                            <span class="mr-2">PERMIKOMNAS</span>
                                <div class="animated-info">
                                    <span class="animated-item">DARI JOGJA</span>
                                    <span class="animated-item">UNTUK</span>
                                    <span class="animated-item">INDONESIA</span>
                                </div>
                        </h1>

                        <p><?php echo $web['selamatdatang']?>.</p>

                        <div class="custom-btn-group mt-4">
                          <a href="#" class="btn mr-lg-2 custom-btn"><i class='uil uil-file-alt'></i> Blog</a>
                          <a href="#contact" class="btn custom-btn custom-btn-bg custom-btn-link">Hubungi?</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about-image svg">
                        <img src="<?php echo base_url()?>uploads/images/brand.svg" class="img-fluid" alt="svg image">
                    </div>
                </div>

            </div>
        </div>
    </section><hr>

    <!-- PROJECTS -->
    <section class="project py-5" id="sejarah">
        <div class="container">

                <div class="row">
                  <div class="col-lg-11 text-center mx-auto col-12">

                      <div class="col-lg-8 mx-auto">
                        <h2><u>Sejarah</u></h2>
                      </div>
                       <div class="row">

                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <p><?php echo $web['sejarah']?>.</p>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about-image svg">
                        <img src="<?php echo base_url()?>uploads/images/history.svg" class="img-fluid" alt="svg image">
                    </div>
                </div>
            </div>
                  </div>
                </div>
        </div>
    </section><hr>

    <!-- FEATURES -->
    <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="visimisi">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                  <h2 class="mb-4"><center>Visi</center></h2>
                  <p><?php echo $web['visi']?></p>
                </div>

                <div class="col-lg-6 col-12">
                  <h2 class="mb-4 mobile-mt-2"><center>Misi</center></h2>
                  <p><?php echo $web['misi']?></p>

                </div>

            </div>
        </div>
    </section><hr>

    <!-- PERKENALAN ANGGOTA -->
    <section id="kepengurusan">
      <div class="container">
          <div class="col-lg-11 text-center col-12 mx-auto">
            <div class="col-lg-8 mx-auto mb-5">
              <h2>Kepengurusan</h2>
            </div>
            <div class="row">
              <div class="col-lg-4 mb-1">
                <div class="list-divisi">
                  <img width="40%" src="<?php echo base_url()?>assets/images/logo-ph.png"  class="img-fluid icon-divisi">
                </div>
                <h5 class="mt-3">Pengurus Harian</h5>
                <button class="btn btn-secondary mt-2 popup" type="button" data-toggle="modal" data-target="#ph">Lihat Selengkapnya</button>
              </div>
              <div class="col-lg-4 mb-1">
                <div class="list-divisi">
                  <img width="40%" src="<?php echo base_url()?>assets/images/logo-kominfo.png" class="img-fluid icon-divisi">
                </div>
                <h5 class="mt-3">Kominfo</h5>
                <button class="btn btn-secondary mt-2 popup" type="button" data-toggle="modal" data-target="#Kominfo">Lihat Selengkapnya</button>
              </div>
              <div class="col-lg-4 mb-1">
                <div class="list-divisi">
                  <img width="40%"  src="<?php echo base_url()?>assets/images/logo-litbang.png" class="img-fluid icon-divisi">
                </div>
                <h5 class="mt-3">Litbang</h5>
                <button class="btn btn-secondary mt-2 popup" type="button" data-toggle="modal" data-target="#Litbang">Lihat Selengkapnya</button>
              </div>
              <div class="col-lg-4 mb-1">
                <div class="list-divisi">
                  <img width="40%" src="<?php echo base_url()?>assets/images/logo-akastrat.png" class="img-fluid icon-divisi">
                </div>
                <h5 class="mt-3">Akastrat</h5>
                <button class="btn btn-secondary mt-2 popup" type="button" data-toggle="modal" data-target="#Akastrat">Lihat Selengkapnya</button>
              </div>
              <div class="col-lg-4 mb-1">
                <div class="list-divisi">
                  <img width="33%" src="<?php echo base_url()?>assets/images/logo-bpd.png" class="img-fluid icon-divisi">
                </div>
                <h5 class="mt-3">BPD</h5>
                <button class="btn btn-secondary mt-2 popup" type="button" data-toggle="modal" data-target="#BPD">Lihat Selengkapnya</button>
              </div>
              <div class="col-lg-4 mb-1">
                <div class="list-divisi">
                  <img width="29%" src="<?php echo base_url()?>assets/images/logo-ppk.png" class="img-fluid icon-divisi">
                </div>
                <h5 class="mt-3">PPK</h5>
                <button class="btn btn-secondary mt-2 popup" type="button" data-toggle="modal" data-target="#PPK">Lihat Selengkapnya</button>
              </div>
            </div>
          </div>
      </div>
    </section><hr>
    <!-- AKHIR PERKENALAN ANGGOTA -->

   <?php include 'tree/modal.php'; ?>

       <!-- Testimonials -->
       <section id="kepengurusan">
      <div class="container">
          <div class="col-lg-11 text-center col-12 mx-auto">
            <div class="col-lg-8 mx-auto mb-5">
              <h2>Himpunan Yang Tergabung</h2>
            </div>
            <div class="row">
   <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:150px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:150px;overflow:hidden;">
          <?php foreach($kampus->result() as $k ){?>
            <div>
                <img data-u="image" src="<?php echo base_url()?>uploads/images/<?=$k->logo_kampus?>" />

            </div>

          <?php }?>
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web animation composer</a>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:14px;height:14px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5000"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();
    </script>
  </div>
</div>
</div>
</section>
<hr>

    <!-- #endregion Jssor Slider End -->
    <!-- end of testimonials -->
    <!-- CONTACT -->
    <section class="contact py-5" id="contact">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mr-lg-5 col-12">
            <div class="google-map w-100">
             <iframe src="https://www.google.com/maps/d/embed?mid=1CCeLEvCUsHSXKHw9b8QlYhpcWos&hl=id" width="400" height="300"></iframe>
            </div>

            <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                <div class="contact-info-item">
                  <p class="footer-text mb-0">PERMIKOMNAS YOGYAKARTA</p>
                  <p class="footer-text mb-0">permikomnas_yogyakarta</p>
                  <p><a href="mailto:hello@company.co">permikomnas@google.com</a></p>
                </div>

                <ul class="social-links">
                     <li><a href="#" class="uil uil-facebook" data-toggle="tooltip" data-placement="left" title="Dribbble"></a></li>
                     <li><a href="#" class="uil uil-instagram" data-toggle="tooltip" data-placement="left" title="Instagram"></a></li>
                     <li><a href="#" class="uil uil-youtube" data-toggle="tooltip" data-placement="left" title="Youtube"></a></li>
                </ul>
            </div>
          </div>

          <div class="col-lg-6 col-12">
            <div class="contact-form">
              <h2 class="mb-4">Kritik & Saran</h2>

              <form action="<?= base_url('home/kirim_pesan')?>" method="post">
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <input type="text" class="form-control" name="nama" placeholder="Nama Kamu" id="name">
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                  </div>

                  <div class="col-12">
                    <textarea name="pesan" rows="6" class="form-control" id="message" placeholder="Pesan"></textarea>
                  </div>

                  <div class="ml-lg-auto col-lg-5 col-12">
                    <input type="submit" class="form-control submit-btn" value="Kirim">
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

<?php include 'tree/footer.php';?>
