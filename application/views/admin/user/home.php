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
              <li class="breadcrumb-item active">Pengguna</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <a href="<?php echo base_url()?>admin/user/add" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Pengguna</a><br><br>
        <div class="row">
        	<div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pengguna Admin Permikomnas Yogyakarta</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr align="center">
                  	<th>No</th>
                    <th>Nama</th>
                    <th>Data Lengkap</th>
                    <th>Role</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  	<?php $no =1;  foreach($user->result() as $a){?>
                  <tr align="center">
                  	<td><?php echo $no++?></td>
                    <td><?=$a->nama?></td>
                    <td><button class="btn btn-primary"  data-toggle="modal" data-target="#modal-default<?=$a->id_user?>">Lihat</button></td>
                    <td><?php if ($a->role == 1) {
                     echo "Super Admin";
                   }else{
                    echo "Admin"; }?></td>
                    <td><a href="<?php echo base_url()?>admin/user/edit/<?=$a->id_user?>" class="btn btn-primary"><i class="fa fa-pen"></i></a> | <a href="<?php echo base_url()?>admin/user/delete/<?=$a->id_user?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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
<?php foreach($user->result() as $a ){?>
 <div class="modal fade" id="modal-default<?=$a->id_user?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><?=$a->nama?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <center> <img src="<?php echo base_url()?>uploads/images/<?=$a->foto?>" width="50%"></center><hr>
       <table>
         <tr>
           <td>Email</td>
           <td> : </td>
           <td><?=$a->email ?></td>
         </tr>
         <tr>
           <td>Password</td>
           <td> : </td>
           <td><?=$a->password ?></td>
         </tr>
         <tr>
           <td>Pengurus</td>
           <td> : </td>
           <td><?=$a->pengurus ?></td>
         </tr>
         <tr>
           <td>Jabatan</td>
           <td> : </td>
           <td><?=$a->jabatan ?></td>
         </tr>
       </table>
     </div>
     <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
 </div>
</div>
<!-- /.modal -->
<?php }?>

<?php $this->load->view('admin/tree/footer');