<?php
  defined('BASEPATH') OR exit ('No direct script access allowed');

  class menu extends CI_Controller{
  
    public function __construct(){
      parent::__construct();
     
     $this->load->model("m_menu");
   
  }

    public function index(){
     
      $model = $this->m_menu;
     
      $data["menu"] = $this->m_menu->getAll();
      $this->load->view("master/menu/list",$data);
       }

       public function edit($id = null){
       

        if(!isset($id)) redirect('master/menu/menu');
        $model = $this->m_menu;
       
       
        if ($this->input->post('nama')) {
          $this->session->set_flashdata('succes', 'Data Berhasil Disimpan');
          $hm =  $this->m_menu->edit();
          $data["kode"] = $this->m_menu->getkode();
          redirect(site_url('master/menu/menu'));
         }else {
          $data["data"] = $this->m_menu->getbyid($id);
          $this->load->view("master/menu/edit",$data);
         }
    }
    public function tambah(){
     
        $model = $this->m_menu;
       
       
        if ($this->input->post('nama')) {
          $this->session->set_flashdata('succes', 'Data Berhasil Disimpan');
          $hm =  $this->m_menu->save();
          $data["kode"] = $this->m_menu->getkode();
          redirect(site_url('master/menu/menu'));
         }else {
          $data["kode"] = $this->m_menu->getkode();
          $this->load->view("master/menu/add",$data);
         }
      }
  
  public function delete($id){
    
    if(!isset($id)) show_404();
    if($this->m_menu->delete($id)){
        redirect(site_url('master/menu/menu'));
    }
   }

}

?>