<?php
  defined('BASEPATH') OR exit ('No direct script access allowed');

  class user extends CI_Controller{
  
    public function __construct(){
      parent::__construct();
     
     $this->load->model("User_model");
   
  }

    public function index(){
     
      $model = $this->User_model;
     
      $data["user"] = $this->User_model->getAll();
      $this->load->view("master/user/list",$data);
       }

       public function edit($id = null){
       

        if(!isset($id)) redirect('master/user/user');
        $model = $this->User_model;
       
       
        if ($this->input->post('nama_user')) {
          $this->session->set_flashdata('succes', 'Data Berhasil Disimpan');
          $hm =  $this->User_model->edit();
        
          redirect(site_url('master/user/user'));
         }else {
          $data["data"] = $this->User_model->getbyid($id);
          $this->load->view("master/user/edit",$data);
         }
    }
    public function tambah(){
     
        $model = $this->User_model;
       
       
        if ($this->input->post('nama_user')) {
          $this->session->set_flashdata('succes', 'Data Berhasil Disimpan');
          $hm =  $this->User_model->save();
         
          redirect(site_url('master/user/user'));
         }else {
         
          $this->load->view("master/user/add");
         }
      }
  
  public function delete($id){
    
    if(!isset($id)) show_404();
    if($this->User_model->delete($id)){
        redirect(site_url('master/user/user'));
    }
   }

}

?>