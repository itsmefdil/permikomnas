<?php

class Setting extends CI_Controller{

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

        $nama_web = $this->input->post('nama_web');
        $selamatdatang = $this->input->post('selamatdatang');
        $sejarah = $this->input->post('sejarah');
        $visi = $this->input->post('visi');
        $misi = $this->input->post('misi');
        $icon = $_FILES['icon']['name'];
        $facebook = $this->input->post('facebook');
        $twitter = $this->input->post('twitter');
        $instagram = $this->input->post('instagram');
        $youtube = $this->input->post('youtube');

        $data = array(
            'nama_web' => $nama_web,
            'selamatdatang' => $selamatdatang,
            'sejarah' => $sejarah,
            'visi' => $visi,
            'misi' => $misi,
            'fb'  => $facebook,
            'tw' => $twitter,
            'ig' => $instagram,
            'yt'   => $youtube,
        );
        $config['allowed_types'] = 'jpg|png|gif|jfif';
        $config['max_size'] = '4096';
        $config['upload_path'] = './uploads/images';
        $this->load->library('upload', $config);
        //berhasil
        if ($this->upload->do_upload('icon')) {
             $gambarLama = $this->input->post('foto_lama');
            if ($gambarLama != 'default.jpg') {
                unlink(FCPATH . 'uploads/images/' . $gambarLama);
            }
            $gambarBaru = $this->upload->data('file_name');
            $this->db->set('icon', $gambarBaru);
        } else {
            $this->upload->display_errors();
        }
        $where = array(
            'id' => 1,
        );

        $id=1;
        $this->db->where('id_web',$id);
        $this->db->update('web',$data);
        redirect('admin/setting');
    } else {
     $data['web'] = $this->db->query("SELECT * FROM web where id_web='1'")->row_array();
     $this->load->view('admin/setting',$data);
   }
}

}
