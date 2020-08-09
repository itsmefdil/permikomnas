<?php 

class User extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		} else if ($this->session->userdata('role') == "0") {
			echo "<script> alert('Anda tidak memiliki Akses untuk membuka halaman ini !') ; window.location.href='../admin'</script>";
		}
	}	

	public function index(){
		$data['user'] = $this->db->query('SELECT * FROM users order by id_user DESC');
		$this->load->view('admin/user/home',$data);
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
				'foto'	=> $foto,
				'nama'	=> $this->input->post('nama'),
				'password' => md5($this->input->post('password')),
				'email'	=> $this->input->post('email'),
				'pengurus'=> $this->input->post('pengurus'),
				'jabatan'=> $this->input->post('jabatan'),
				'role'	=> $this->input->post('role')
			];

			$this->db->insert('users',$data);
			redirect('admin/user');
		} else {
			$this->load->view('admin/user/add');
		} 
	}
	public function edit($id){
		if (isset($_POST['simpan'])) {
			
			$foto = $_FILES['foto']['name'];

			$data = array(
				'nama'	=> $this->input->post('nama'),
				'password' => md5($this->input->post('password')),
				'email'	=> $this->input->post('email'),
				'pengurus'=> $this->input->post('pengurus'),
				'jabatan'=> $this->input->post('jabatan'),
				'role'	=> $this->input->post('role'),
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
				echo $this->upload->display_errors();
			}

			$where = array(
				'id_user' => $id,
			);

			$this->db->where('id_user',$id);
			$this->db->update('users',$data);
			redirect('admin/user');
		} else {
			$this->db->where('id_user',$id);
			$data['user'] = $this->db->get('users')->row_array();
			$this->load->view('admin/user/edit',$data);
		}
	}

	public function delete($id){
		$this->db->where('id_user',$id);
		$this->db->delete('users');

		echo "<script> alert('Berhasil Menghapus User'); window.location.href='../' </script>";
	}
}