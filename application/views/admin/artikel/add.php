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
          <h1>Artikel</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"> Tambah Artikel</li>
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
              <h3 class="card-title">Tambah Artikel</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <?php echo form_open_multipart('admin/artikel/add');?>
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Judul</label>
                <input type="text" class="form-control" id="nama" required placeholder="Masukan Judul" name="judul">
              </div>
              <div class="form-group">
                <label for="nama">Penulis</label>
                <input type="text" required class="form-control" id="nama"  name="penulis">
              </div>

              <div class="mb-3">
                <label>Konten</label>
                <textarea name="konten" required class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
                <label for="jabatan">Kategori</label>
                <select class="custom-select" name="kategori">
                 <?php foreach($kategori->result() as $k) { ?>
                  <option value="<?=$k->kategori?>"><?=$k->kategori?></option>
                <?php }?>
              </select>
              <a href="#"  data-toggle="modal" data-target="#modal-default">Tambah Kategori</a>
            </div>

            <div class="form-group">
              <label for="exampleInputFile">Foto</label>
              <div class="imgWrap">
                <center><img  src="<?php echo base_url()?>uploads/images/default.jpg" id="imgView" class="img img-thumbnail"  width="70%"><br><br></center>
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

            <input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary"> <a href="<?php echo base_url()?>admin/artikel" class="btn btn-secondary"> Kembali</a>
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
        <h4 class="modal-title">Kategori</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="form-group">
        <form action="<?php echo base_url()?>admin/artikel/kategori" method="post">
          <label for="nama">Kategori</label>
          <input type="text" class="form-control" id="nama" placeholder="Masukan Kategori" name="kategori">
        </div>
        <input class="btn btn-primary" type="submit" name="simpan" value="Tambah">
      </form>
      <br><br>
      <table class="table">
        <tr>
          <th>No.</th>
          <th>Kategori</th>
          <th>Aksi</th>
        </tr>
        <?php $no = 1; foreach($kategori->result() as $k) { ?>
          <tr align="center">
            <td><?php echo $no++?></td>
            <td><?=$k->kategori?></td>
            <td><a class="btn btn-danger" href="<?php echo base_url()?>admin/artikel/delete_kategori/<?=$k->id_kategori?>"><i class="fa fa-trash"></i> Hapus</a></td>
            </tr><?php }?>
          </table>
        </div>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <?php $this->load->view('admin/tree/footer');
