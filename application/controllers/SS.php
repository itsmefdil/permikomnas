<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	 public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                
                if($this->session->userdata('status') != "login"){
				redirect(base_url("login"));
				}
        }

	public function index()
	{
		$this->load->view('admin/home');
	}

	
	

	public function kategori(){
		if (isset($_POST['simpan'])) {
			$data = array (
				'kategori'	=> $this->input->post('kategori')
			);
			$this->db->insert('kategori',$data);
			redirect('admin/kategori');
		}else{
			$data['blog'] = $this->db->get('blog');
			$data['kat'] = $this->db->get('kategori');
			$this->load->view('admin/kategori',$data);
		}
	}

	public function kategori_hapus($id){
		$this->db->where('id',$id);
		$this->db->delete('kategori');
		redirect('admin/kategori');
	}

	

	

	
}
