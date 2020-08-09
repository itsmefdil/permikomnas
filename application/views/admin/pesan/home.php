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
          <h1>Pesan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pesan</li>
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

    <div class="row">
     <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Pesan Masuk</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr align="center">
               <th>No</th>
               <th>Nama</th>
               <th>Email</th>
               <th>Pesan</th>
               <th rowspan="2">Aksi</th>
             </tr>
           </thead>
           <tbody>
             <?php $no =1;  foreach($pesan->result() as $p){?>
              <tr align="center">
               <td><?php echo $no++?></td>
               <td><?=$p->nama?></td>
               <td><?=$p->email?></td>
               <td><?=$p->pesan?></td>
               <td><a  href="<?= base_url('admin/pesan/delete/')?><?=$p->id?>" class="btn btn-danger">Hapus</a></td>
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
