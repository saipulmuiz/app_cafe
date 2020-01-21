<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->model("Admin_model");
	}

	public function index()
	{
		if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		}
		$data["menus"] = $this->Admin_model->getTopMenu();
		$data["transaksi"] = $this->Admin_model->getTopTransaksi();
		$this->load->view("admin", $data);
	}
}
