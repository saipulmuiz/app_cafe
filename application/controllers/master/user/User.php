<?php
  defined('BASEPATH') OR exit ('No direct script access allowed');

  class user extends CI_Controller{
  
    public function __construct(){
      parent::__construct();
     
     $this->load->model("m_user");
   
  }

    public function index(){
     
      $model = $this->m_user;
     
      $data["user"] = $this->m_user->getAll();
      $this->load->view("master/user/list",$data);
       }

       public function edit($id = null){
       

        if(!isset($id)) redirect('master/user/user');
        $model = $this->m_user;
       
       
        if ($this->input->post('nama_user')) {
          $this->session->set_flashdata('succes', 'Data Berhasil Disimpan');
          $hm =  $this->m_user->edit();
        
          redirect(site_url('master/user/user'));
         }else {
          $data["data"] = $this->m_user->getbyid($id);
          $this->load->view("master/user/edit",$data);
         }
    }
    public function tambah(){
     
        $model = $this->m_user;
       
       
        if ($this->input->post('nama_user')) {
          $this->session->set_flashdata('succes', 'Data Berhasil Disimpan');
          $hm =  $this->m_user->save();
         
          redirect(site_url('master/user/user'));
         }else {
         
          $this->load->view("master/user/add");
         }
      }
  
  public function delete($id){
    
    if(!isset($id)) show_404();
    if($this->m_user->delete($id)){
        redirect(site_url('master/user/user'));
    }
   }

}

?>