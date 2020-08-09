<?php

class Pengurus extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        
        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
    }

    public function index(){
        $data['pengurus'] = $this->db->get('pengurus');

        $this->load->view('admin/ph/home',$data);
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
                'foto'  => $foto,
                'nama'  => $this->input->post('nama'),
                'pengurus'=> $this->input->post('pengurus'),
                'jabatan' => $this->input->post('jabatan'),
                'kampus' => $this->input->post('kampus'),
            ];

            $this->db->insert('pengurus',$data);
            redirect('admin/pengurus');
        } else {
            $data['kampus'] = $this->db->get('kampus');
            $this->load->view('admin/ph/add',$data);
        }
    }
    public function edit($id){
        if (isset($_POST['simpan'])) {
            
            $nama = $this->input->post('nama');
            $pengurus = $this->input->post('pengurus');
            $jabatan = $this->input->post('jabatan');
            $kampus = $this->input->post('kampus');
            
            $foto = $_FILES['foto']['name'];

            $data = array(
                'nama' => $nama,
                'pengurus' => $pengurus,
                'jabatan' => $jabatan,
                'kampus' => $kampus,
                
            );

            $config['allowed_types'] = 'jpg|png|gif|jfif';
            $config['max_size'] = '4096';
            $config['upload_path'] = './uploads/images';

            $this->load->library('upload', $config);
        //berhasil

            if ($this->upload->do_upload('foto')) {
                 $gambarLama = $this->input->post('foto_lama');
                if ($gambarLama != 'default.jpg') {
                    unlink(FCPATH . 'uploads/images/' . $gambarLama);
                }
                $gambarBaru = $this->upload->data('file_name');
                $this->db->set('foto', $gambarBaru);
            } else {
                $this->upload->display_errors();
            }

            $where = array(
                'id_pengurus' => $id,
            );

            $this->db->where('id_pengurus',$id);
            $this->db->update('pengurus',$data);
            redirect('admin/pengurus');
        } else {
            $this->db->where('id_pengurus',$id);
            $data['pengurus'] = $this->db->get('pengurus')->row_array();
            $data['kampus'] = $this->db->get('kampus');
            $this->load->view('admin/ph/edit',$data);
        }
    }

    public function delete($id){
        $this->db->where('id_pengurus',$id);
        $this->db->delete('pengurus');
        redirect('admin/pengurus');
    }
}