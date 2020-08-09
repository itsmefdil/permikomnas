<?php

class Pesan extends CI_Controller{

  public function __construct(){
    parent::__construct();
  }

  public function index(){
    $data['pesan'] = $this->db->query('SELECT * FROM pesan order by id DESC');

    $this->load->view('admin/pesan/home',$data);
  }

  public function delete($id){

    $this->db->where('id',$id);
    $this->db->delete('pesan');

    redirect('admin/pesan');

  }
}
