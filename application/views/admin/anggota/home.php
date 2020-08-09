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
              <li class="breadcrumb-item active">Anggota</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <a href="<?php echo base_url()?>admin/anggota/add" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Anggota</a><br><br>
        <div class="row">
        	<div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Anggota Permikomnas Yogyakarta</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  	<th>No</th>
                    <th>Nama</th>
                    <th>Pengurus</th>
                    <th>Jabatan</th>
                    <th>Kampus</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php $no =1;  foreach($anggota->result() as $a){?>
                  <tr align="center">
                  	<td><?php echo $no++?></td>
                    <td><?=$a->nama?></td>
                    <td><?=$a->pengurus?></td>
                    <td><?=$a->jabatan?></td>
                    <td><?=$a->kampus?></td>
                    <td><img width="70px" src="<?php echo base_url()?>uploads/images/<?=$a->foto?>"></td>
                    <td><a href="<?php echo base_url()?>admin/anggota/edit/<?=$a->id_anggota?>" class="btn btn-primary"><i class="fa fa-pen"></i></a> | <a href="<?php echo base_url()?>admin/anggota/delete/<?=$a->id_anggota?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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