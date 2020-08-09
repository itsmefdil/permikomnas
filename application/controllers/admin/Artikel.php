<?php 

class Artikel extends CI_Controller{
	
	public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                
                if($this->session->userdata('status') != "login"){
        redirect(base_url("login"));
        }
        }

	public function index(){
    $data['artikel'] = $this->db->query('SELECT * FROM artikel order by id_artikel DESC');
    $this->load->view('admin/artikel/home',$data);

  }

  public function add(){
    if (isset($_POST['simpan'])) {

      $upload_foto = $_FILES['foto'];

      if ($upload_foto) {
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size'] = '0';
        $config['upload_path'] = './uploads/images/';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
          $foto = $this->upload->data('file_name');
        } else {
          $this->upload->display_errors();
        }
      }
      $data = [
        'judul' => $this->input->post('judul'),
        'kategori' => $this->input->post('kategori'),
        'foto' => $foto,
        'konten' => $this->input->post('konten'),
        'penulis' => $this->input->post('penulis'),
        'waktu' => date('d-m-Y'),
      ];

      $this->db->insert('artikel', $data);
      redirect(base_url('admin/artikel'));
    }else{
     $data['kategori'] = $this->db->get('kategori');
     $this->load->view('admin/artikel/add',$data);
   }
 }
 public function edit($id){
  if (isset($_POST['simpan'])) {

    $judul = $this->input->post('judul');
    $kategori = $this->input->post('kategori');
    $konten = $this->input->post('konten');
    $penulis = $this->input->post('penulis');
    $waktu = date("d-m-Y");
    $foto = $_FILES['foto']['name'];

    $data = array(
      'judul' => $judul,
      'kategori' => $kategori,
      'konten' => $konten,
      'penulis'	=> $penulis,
      'waktu'		=> $waktu,
    );

    $config['allowed_types'] = 'jpg|png|gif|jfif';
    $config['max_size'] = '4096';
    $config['upload_path'] = './uploads/images';

    $this->load->library('upload', $config);
        //berhasil
    

    if ($this->upload->do_upload('foto')) {
       $gambarLama = $data['user']['foto'];
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . '/uploads/images/' . $gambarLama);
      }
      $gambarBaru = $this->upload->data('file_name');
      $this->db->set('foto', $gambarBaru);
    } else {
      $this->upload->display_errors();
    }

    $where = array(
      'id' => $id,
    );

    $this->db->where('id_artikel',$id);
    $this->db->update('artikel',$data);
    redirect('admin/artikel');
  } else {
    $this->db->where('id_artikel',$id);
    $data['artikel'] = $this->db->get('artikel')->row_array();
    $data['kategori'] = $this->db->get('kategori');
    $this->load->view('admin/artikel/edit',$data);
  }
}

public function delete($id){
  $this->db->where('id_artikel',$id);
  $this->db->delete('artikel');
  redirect('admin/artikel');
}

public function kategori(){
  $data = [
    'kategori' => $this->input->post('kategori'),
  ];

  $this->db->insert('kategori',$data);
  redirect('admin/artikel/add');
}

public function delete_kategori($id){

  $this->db->where('id_kategori',$id);
  $this->db->delete('kategori');
  redirect('admin/artikel/add');
}

function upload_image(){
  $this->load->library('upload');
  if(isset($_FILES["image"]["name"])){
    $config['upload_path'] = './uploads/images/';
    $config['allowed_types'] = 'jpg|jpeg|png|gif';
    $this->upload->initialize($config);
    if(!$this->upload->do_upload('image')){
      $this->upload->display_errors();
      return FALSE;
    }else{
      $data = $this->upload->data();
            //Compress Image
      $config['image_library']='gd2';
      $config['source_image']='./uploads/images/'.$data['file_name'];
      $config['create_thumb']= FALSE;
      $config['maintain_ratio']= TRUE;
      $config['quality']= '60%';
      $config['width']= 800;
      $config['height']= 800;
      $config['new_image']= './uploads/images/'.$data['file_name'];
      $this->load->library('image_lib', $config);
      $this->image_lib->resize();
      echo base_url().'uploads/images/'.$data['file_name'];
    }
  }
}

function delete_image(){
  $this->load->library('upload');
  $src = $this->input->post('src');
  $file_name = str_replace(base_url(), '', $src);
  if(unlink($file_name)){
    echo 'File Delete Successfully';
  }
}

}