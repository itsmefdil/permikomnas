<?php

$this->load->view('admin/tree/head');
$this->load->view('admin/tree/navbar');
$this->load->view('admin/tree/sidebar');

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Anggota</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Tambah Anggota</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php echo form_open_multipart('');?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Lengkap" value="<?php echo $anggota['nama']?>" name="nama">
                    <input type="hidden" class="form-control" id="nama" placeholder="Masukan Nama Lengkap" value="<?php echo $anggota['foto']?>" name="foto-lama">
                  </div>
                    <div class="form-group">
                        <label for="jabatan">Pengurus</label>
                        <select class="custom-select" name="pengurus">
                          <option value="<?php echo $anggota['pengurus']?>" selected><?php echo $anggota['pengurus']?> (Saat Ini)</option>
                          <option value="Pengurus Harian">Pengurus Harian</option>
                          <option value="Kominfo">Kominfo</option>
                          <option value="BPD">BPD</option>
                          <option value="PPK">PPK</option>
                          <option value="Akastrat">Akastrat</option>
                          <option value="Litbang">Litbang</option>
                        </select>
                      </div>
                  <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <select class="custom-select" name="jabatan">
                          <option value="<?php echo $anggota['jabatan']?>" selected><?php echo $anggota['jabatan']?> (Saat Ini)</option>
                          <option value="Koordinator">Koordinator</option>
                          <option value="Wakil Koor">Wakil Koor</option>
                          <option value="Staff">Staff</option>
                        </select>
                      </div>
                  <div class="form-group">
                        <label for="jabatan">Kampus</label>
                        <select class="custom-select" name="kampus">
                          <option value="<?php echo $anggota['kampus']?>" selected><?php echo $anggota['kampus']?> (Saat Ini)</option>
                          <?php foreach($kampus->result() as $k ){?>
                          <option value="<?=$k->nama_kampus?>"><?=$k->nama_kampus?></option>
                          <?php } ?>
                        </select>
                      </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="foto" value="<?php echo $anggota['foto']?>">
                        <label class="custom-file-label" for="exampleInputFile">Pilih Foto</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary"> <a href="<?php echo base_url()?>admin/anggota" class="btn btn-secondary"> Kembali</a>
                </div>
              </form>
            </div>
         
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php $this->load->view('admin/tree/footer');