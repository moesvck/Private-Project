<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("daftar_model");
    }
	public function index()
	{
            $data["page"] = "daftar";
            $this->load->view("main",$data);
	}
    
    public function tambah(){
        $data = array(
			"iddaftar" => date("sihadmY"),
			"nama" => $this->input->post("nama"),
			"nik" => $this->input->post("nik"),
			"tanggallahir" => ($this->input->post("tanggallahir")),
			"jeniskelamin" => $this->input->post("jeniskelamin"),
			"agama" => $this->input->post("agama"),
			"telephone" => $this->input->post("telephone"),
			"alamat" => $this->input->post("alamat"),
			"email" => $this->input->post("email")
		);
		$this->daftar_model->tambahdaftar($data);
		redirect("beranda");
    }
}
