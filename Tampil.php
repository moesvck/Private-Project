<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampil extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("daftar_model");
    }

	public function index()
	{
        $data["page"] = "tampil";
        $data["daftar"] = $this->daftar_model->ambildaftar()->result();
        $this->load->view("main",$data);
	}
}