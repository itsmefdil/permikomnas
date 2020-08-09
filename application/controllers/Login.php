<?php 
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();		
	
	}
	function index(){
		
		$this->load->view('login/index');
	}
	function auth(){
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$cek = $this->db->query("SELECT * FROM users where email='$email' and password='$password'");

		if($cek->num_rows() > 0){
			$data = $cek->row_array();
			$data_session = array(
				'email' => $email,
				'status' => "login",
				'role' => $data['role'],
				'nama' => $data['nama'],
				'foto' => $data['foto'],
				'password' => $data['password'],
				'pengurus' => $data['pengurus'],
				'id_user' => $data['id_user']
				);
			$this->session->set_userdata($data_session);
			redirect(base_url("admin"));
		}else{
			echo "<script> window.alert('Username atau Password Salah') ; window.location.href='../login'; </script>";
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}