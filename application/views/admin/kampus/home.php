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
          <h1>Kampus</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Kampus</li>
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
            <h3 class="card-title">Tambah Kampus</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <?php echo form_open_multipart('');?>
          <div class="card-body">
            <div class="imgWrap">
                <center><img  src="<?php echo base_url()?>uploads/images/default.jpg" id="imgView" class="img img-thumbnail"  width="10%%"><br><br></center>
              </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" required class="form-control" id="nama" placeholder="Masukan Nama Kampus"  name="nama_kampus">
            </div>

            <div class="input-group">
              <div class="custom-file">
                <input  id="inputFile" type="file" class="custom-file-input" id="exampleInputFile" name="logo_kampus">
                <label class="custom-file-label" for="exampleInputFile">Pilih Foto</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text" id="">Upload</span>
              </div>
            </div>
          </div>
           <div class="card-footer">
                  <input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary">
                </div>
        </div>
      </div>
    </div>
    <div class="row">
     <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Kampus IT Yogyakarta</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr align="center">
               <th>No</th>
               <th>Nama</th>
               <th>Logo</th>
               <th>Aksi</th>
             </tr>
           </thead>
           <tbody>
             <?php $no =1;  foreach($kampus->result() as $a){?>
              <tr align="center">
               <td><?php echo $no++?></td>
               <td><?=$a->nama_kampus?></td>
               <td><img width="30px" src="<?php echo base_url()?>uploads/images/<?=$a->logo_kampus?>"></td>
               <td> <a href="<?php echo base_url()?>admin/kampus/delete/<?=$a->id_kampus?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
             </tr>
             <?}?>
           </tbody>

         </table>
       </div>
       <!-- /.card-body -->
     </div>
     <!-- /.card -->
   </div>
   <!-- /.col -->
 </div>
 <!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php $this->load->view('admin/tree/footer');
