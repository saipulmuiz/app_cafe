<?php
  defined('BASEPATH') OR exit ('No direct script access allowed');

  class menu extends CI_Controller{
  
    public function __construct(){
      parent::__construct();
     
     $this->load->model("Menu_model");
   
  }

    public function index(){
     
      $model = $this->Menu_model;
     
      $data["menu"] = $this->Menu_model->getAll();
      $this->load->view("master/menu/list",$data);
       }

       public function edit($id = null){
       

        if(!isset($id)) redirect('master/menu/menu');
        $model = $this->Menu_model;
       
       
        if ($this->input->post('nama')) {
          $this->session->set_flashdata('succes', 'Data Berhasil Disimpan');
          $hm =  $this->Menu_model->edit();
          $data["kode"] = $this->Menu_model->getkode();
          redirect(site_url('master/menu/menu'));
         }else {
          $data["data"] = $this->Menu_model->getbyid($id);
          $this->load->view("master/menu/edit",$data);
         }
    }
    public function tambah(){
     
        $model = $this->Menu_model;
       
       
        if ($this->input->post('nama')) {
          $this->session->set_flashdata('succes', 'Data Berhasil Disimpan');
          $hm =  $this->Menu_model->save();
          $data["kode"] = $this->Menu_model->getkode();
          redirect(site_url('master/menu/menu'));
         }else {
          $data["kode"] = $this->Menu_model->getkode();
          $this->load->view("master/menu/add",$data);
         }
      }
  
  public function delete($id){
    
    if(!isset($id)) show_404();
    if($this->Menu_model->delete($id)){
        redirect(site_url('master/menu/menu'));
    }
   }

}

?>