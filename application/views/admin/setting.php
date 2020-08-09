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
          <h1>Setting Web</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"> Setting Web</li>
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
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Pengaturan Web</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <?php echo form_open_multipart('');?>
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama Web</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Web" value="<?php echo $web['nama_web'] ?>" name="nama_web">
                <input type="hidden" class="form-control" id="nama" placeholder="Masukan Nama Web" value="<?php echo $web['icon'] ?>" name="foto_lama">
              </div>
              <div class="form-group">
                <label for="nama">Selamat Datang</label>
                <textarea class="textarea" name="selamatdatang"><?php echo $web['selamatdatang'] ?></textarea>
              </div>

              <div class="mb-3">
                <label>Sejarah</label>
                <textarea name="sejarah" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $web['sejarah'] ?></textarea>
              </div>
              <div class="mb-3">
                <label>Visi</label>
                <textarea name="visi" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $web['visi'] ?></textarea>
              </div>
              <div class="mb-3">
                <label>Misi</label>
                <textarea name="misi" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $web['misi'] ?></textarea>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.card-body -->  <div class="col-md-4">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Media</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Facebook</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukan username" value="<?php echo $web['fb'] ?>" name="facebook">
              </div>
              <div class="form-group">
                <label for="nama">Instagram</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukan username" value="<?php echo $web['ig'] ?>" name="instagram">
              </div>
              <div class="form-group">
                <label for="nama">Twitter</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukan username" value="<?php echo $web['tw'] ?>" name="twitter">
              </div>
              <div class="form-group">
                <label for="nama">Youtube</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukan username" value="<?php echo $web['yt'] ?>" name="youtube">
              </div>

            <div class="form-group">
              <label for="exampleInputFile">Favicon</label>
              <div class="imgWrap">
                <center><img  src="<?php echo base_url()?>uploads/images/<?php echo $web['icon']?>" id="imgView" class="img img-thumbnail"  width="70%"><br><br></center>
              </div>

              <div class="input-group">
                <div class="custom-file">
                  <input  id="inputFile" type="file" class="custom-file-input" id="exampleInputFile" name="icon">
                  <label class="custom-file-label" for="exampleInputFile">Pilih Icon</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text" id="">Upload</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-12">
        <div class="card ">

          <div class="card-body" align="center">

            <input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary">
          </div>
        </div>
      </div>
      <!-- /.card -->
    </div>
    <!--/.col (right) -->
    <!-- left column -->
  </form>
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

  <?php $this->load->view('admin/tree/footer');
