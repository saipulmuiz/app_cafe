<?php
  defined('BASEPATH') OR exit ('No direct script access allowed');

  class Transaksi extends CI_Controller{
  
    public function __construct(){
      parent::__construct();
     
     $this->load->model("Transaksi_model");
   
  }

    public function index(){
     
      $model = $this->Transaksi_model;
     
      $data["transaksi"] = $this->Transaksi_model->getAll();
      $this->load->view("transaksi/transaksi",$data);
       }

    public function bayar($id = null){
    

    if(!isset($id)) redirect('transaksi/transaksi');
    $model = $this->Transaksi_model;
    
    
    if ($this->input->post('nama_pemesan')) {
        $this->session->set_flashdata('succes', 'Data Berhasil Disimpan');
        redirect(site_url('transaksi'));
        }else {
        $data["data"] = $this->Transaksi_model->getbyid($id);
        $this->load->view("transaksi/bayar",$data);
        }
    }
  
  public function delete($id){
    
    if(!isset($id)) show_404();
    if($this->Transaksi_model->delete($id)){
        redirect(site_url('transaksi/transaksi'));
    }
   }

}

?>