<?php

class Home extends CI_Controller{


	public function index(){
		$data['kominfo'] = $this->db->query('SELECT * FROM anggota where pengurus="Kominfo"');
		$data['bpd'] = $this->db->query('SELECT * FROM anggota where pengurus="BPD"');
		$data['litbang'] = $this->db->query('SELECT * FROM anggota where pengurus="Litbang"');
		$data['akastrat'] = $this->db->query('SELECT * FROM anggota where pengurus="Akastrat"');
		$data['ppk'] = $this->db->query('SELECT * FROM anggota where pengurus="PPK"');
		$data['pengurus'] = $this->db->get('pengurus');
		$data['anggota'] = $this->db->get('anggota');
		$data['kampus'] = $this->db->get('kampus');
		$data['web'] = $this->db->query('SELECT * FROM web where id_web=1')->row_array();
		$this->load->view('front/home' ,$data);
	}

	public function kirim_pesan(){

		$data = [
			'nama' 	=> $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'pesan'	=> $this->input->post('pesan')
		];
		$this->db->insert('pesan',$data);

		echo "<script> alert('Berhasil Mengirim Persan') ; window.location.href='../home';</script>";
	}

}
