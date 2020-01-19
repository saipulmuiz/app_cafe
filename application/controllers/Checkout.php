<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('m_checkout');
    }

	public function index()
	{
		$data['subtot']=$this->m_checkout->get_subtot();
        $data['data']=$this->m_checkout->get_all_produk();
		$this->load->view('front/checkout',$data);
	}

	public function tambah_pesanan()
	{
        if ($this->input->post('nama_pemesan')) {
			$this->m_checkout->save();
			$this->session->set_flashdata('success', 'Data Berhasil Disimpan');
			redirect(site_url('checkout'));
		   }
	}


}
