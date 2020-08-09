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
            <li class="breadcrumb-item active">Artikel</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <a href="<?php echo base_url()?>admin/artikel/add" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Artikel</a><br><br>
      <div class="row">
       <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Artikel</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                 <th>No</th>
                 <th>Judul</th>
                 <th>Penulis</th>
                 <th>Konten</th>
                 <th>Kategori</th>
                 <th>Foto</th>
                 <th>Aksi</th>
               </tr>
             </thead>
             <tbody>
               <?php $no =1;  foreach($artikel->result() as $a){?>
                <tr align="center">
                 <td><?php echo $no++?></td>
                 <td><?=$a->judul?></td>
                 <td><?=$a->penulis?></td>
                 <td><button class="btn btn-primary"  data-toggle="modal" data-target="#modal-default<?=$a->id_artikel?>">Lihat</button></td>
                 <td><?=$a->kategori?></td>
                 <td><img width="70px" src="<?php echo base_url()?>uploads/images/<?=$a->foto?>"></td>
                 <td><a href="<?php echo base_url()?>admin/artikel/edit/<?=$a->id_artikel?>" class="btn btn-primary"><i class="fa fa-pen"></i></a> | <a href="<?php echo base_url()?>admin/artikel/delete/<?=$a->id_artikel?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
<?php foreach($artikel->result() as $a ){?>
 <div class="modal fade" id="modal-default<?=$a->id_artikel?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><?=$a->judul?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <img src="<?php echo base_url()?>uploads/images/<?=$a->foto?>" width="100%"><hr>
       <?=$a->konten?>
     </div>
     <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
 </div>
</div>
<!-- /.modal -->
<?php }?>
<?php $this->load->view('admin/tree/footer');