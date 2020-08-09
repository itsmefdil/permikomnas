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
                <input type="hidden" class="form-control" id="nama" placeholder="Masukan Nama Lengkap" value="<?php echo $user['foto']?>" name="foto-lama">
              </div>
              <div class="form-group">
                <label for="nama">Email</label>
                <input type="text" class="form-control" placeholder="Masukan Email" value="<?php echo $user['email']?>" id="nama"  name="email">
              </div>
              <div class="form-group">
               
                <a href="#modal-default"  data-toggle="modal" data-target="#modal-default">Ganti Password</a>
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


 <div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Ganti Password</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url()?>admin/profile/change_psw">
       <div class="form-group">
                <label for="nama">Password</label>
                <input type="password" class="form-control" id="nama" placeholder="Masukan Password Baru" name="password">
              </div>
          <button class="btn btn-secondary" type="submit">Simpan</button>
     </div></form>
     <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
 </div>
</div>
<!-- /.modal -->

<?php $this->load->view('admin/tree/footer');