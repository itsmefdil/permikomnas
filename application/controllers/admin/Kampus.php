<?php

class Kampus extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }

    public function index(){

      if (isset($_POST['simpan'])) {

        $upload_foto = $_FILES['logo_kampus'];

        if ($upload_foto) {
            $config['allowed_types'] = 'jpg|png|gif';
            $config['max_size'] = '0';
            $config['upload_path'] = './uploads/images/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('logo_kampus')) {
                $logo = $this->upload->data('file_name');
            } else {
                $this->upload->display_errors();
            }
        }

        $data = [
            'logo_kampus'  => $logo,
            'nama_kampus'  => $this->input->post('nama_kampus'),
        ];

        $this->db->insert('kampus',$data);
        redirect('admin/kampus');
    } else {
        $data['kampus'] = $this->db->query('SELECT * FROM kampus order by id_kampus DESC');
        $this->load->view('admin/kampus/home' , $data);
    }
}

public function delete($id){
  $this->db->where('id_kampus',$id);
  $this->db->delete('kampus');
  redirect('admin/kampus');
}
}