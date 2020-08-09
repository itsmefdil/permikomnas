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
          <h1>Pengguna</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"> Edit Pengguna</li>
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
              <h3 class="card-title">Edit Pengguna</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <?php echo form_open_multipart('');?>
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" value="<?php echo $user['nama']?>" name="nama">
              </div>
              <div class="form-group">
                <label for="nama">Email</label>
                <input type="text" class="form-control" placeholder="Masukan Email" value="<?php echo $user['email']?>" id="nama"  name="email">
              </div>
              <div class="form-group">
                <label for="nama">Password</label>
                <input type="password" class="form-control" placeholder="Masukan Password" id="nama" value="<?php echo $user['password']?>" name="password">
              </div>
              <div class="form-group">
                <label for="jabatan">Pengurus</label>
                <select class="custom-select" name="pengurus">
                  <option value="<?php echo $user['pengurus']?>" selected><?php echo $user['pengurus']?> (Saat ini)</option>
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
                   <option value="<?php echo $user['jabatan']?>" selected><?php echo $user['jabatan']?> (Saat ini)</option>
                  <option value="Korwil">Korwil</option>
                  <option value="Wakorwil">Wakorwil</option>
                  <option value="Sekretaris">Sekretaris</option>
                  <option value="Bendahara">Bendahara</option>
                  <option value="Koordinator">Koordinator</option>
                  <option value="Wakil Koor">Wakil Koor</option>
                  <option value="Staff">Staff</option>
                </select>
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
                <label for="jabatan">Role</label>
                <select class="custom-select" name="role">
                   <option value="<?php echo $user['role']?>" selected><?php if ($user['role'] == 1) {
                     echo "Super Admin";
                   }else{
                    echo "Admin"; }?> (Saat ini)</option>
                  <option value="1">Super Admin</option>
                  <option value="0">Admin</option>
                </select>
                
              </div>

              <div class="form-group">
                <label for="exampleInputFile">Foto</label>
                <div class="imgWrap">
                  <center><img  src="<?php echo base_url()?>uploads/images/<?php echo $user['foto']?>" id="imgView" class="img img-thumbnail"  width="70%"><br><br></center>
                </div>

                <div class="input-group">
                  <div class="custom-file">
                    <input  id="inputFile" type="file" class="custom-file-input" id="exampleInputFile" name="foto">
                    <label class="custom-file-label" for="exampleInputFile">Pilih Foto</label>
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

              <input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary"> <a href="<?php echo base_url()?>admin/user" class="btn btn-secondary"> Kembali</a>
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