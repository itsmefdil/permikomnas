<?php

class Profile extends CI_Controller{

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
			
			$foto = $_FILES['foto']['name'];
		

			$data = array(
				'nama'	=> $this->input->post('nama'),
				'email'	=> $this->input->post('email'),
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
				$this->session->set_userdata('foto',$foto);
			} else {
				$this->upload->display_errors();
			}
			
			$where = array(

				'id_user' => $id,
			);
			
			$id = $this->session->userdata('id_user');
			
			$this->db->where('id_user',$id);
			$this->db->update('users',$data);
			redirect('admin/profile');

		} else {
			$id = $this->session->userdata('id_user');
			$this->db->where('id_user',$id);
			$data['user'] = $this->db->get('users')->row_array();
			$this->load->view('admin/profile',$data);
		}
	}

	public function change_psw(){

		$data = [
			'password' => md5($this->input->post('password'))
		];

		$id = $this->session->userdata('id_user');

		$this->db->where('id_user',$id);
		$this->db->update('users',$data);
		echo "<script> alert('password berhasil diganti') ; window.location.href='../' ;</script>";

	}
}