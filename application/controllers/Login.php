<?php
  defined('BASEPATH') OR exit ('No direct script access allowed');

  class Login extends CI_Controller{
 
    function __construct(){
      parent::__construct();		
      $this->load->model('m_login');
   
    }
   
    function index(){
      $this->load->view('v_login');
    }
   
    function aksi_login(){
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $where = array(
        'username' => $username,
        'password' => md5($password)
        );
      $cek = $this->m_login->cek_login("user",$where)->row();
     
      if($cek){
        $jabatan = $cek->level;
        $nama = $cek->nama_user;
        
          
        $data_session = array(
          'nama' => $nama,
          'level' => $jabatan,
          'status' => "login"
          );
   
        $this->session->set_userdata($data_session);
        
        redirect(site_url("admin"));
   
      }else{
        $this->session->set_flashdata('eror', 'Maaf Username Dan Password Salah');
        $this->load->view('v_login');

      }
    }
   
    function logout(){
      $this->session->sess_destroy();
      redirect(site_url('login'));
    }
  }

?>