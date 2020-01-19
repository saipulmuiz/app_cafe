<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Checkout_model');
    }

	public function index()
	{
		$this->load->model("Front_model");
		$data['qty'] = $this->Front_model->CountCart();
		$data['subtot']=$this->Checkout_model->get_subtot();
        $data['data']=$this->Checkout_model->get_all_produk();
		$this->load->view('front/checkout',$data);
	}

	public function tambah_pesanan()
	{
		$id = uniqid("TR-");
		$checkout = $this->Checkout_model;

		$carts = $checkout->get_all_produk();
		if($this->input->method()=="post"){
			$checkout->save(array(
				'id_transaksi'	=> $id,
				'nama_pemesan'	=> $this->input->post('nama_pemesan'),
				'email'			=> $this->input->post('email'),
				'no_hp'			=> $this->input->post('no_hp'),
				'status_pemesanan'	=> 'Belum Dibayar',
				'id_user' =>	'2132141'
			));
			foreach($carts as $cart){
				$checkout->save_detail(array(
					'id_transaksi' => $id,
					'id_menu'		=> $cart->id_menu,
					'qty'			=> $cart->qty,
					'harga'			=> $cart->harga
				));
			}
			$checkout->DelCart();
			$this->session->set_flashdata('success', 'Data Berhasil');
			redirect(base_url());
		}
		else{
			redirect('checkout');
		}
	}


}
