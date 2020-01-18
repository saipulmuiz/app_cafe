<?php 
defined('BASEPATH') OR exit('NO direct script access allowed');

class Front extends CI_Controller {
    public function __construct(){
        parent::__construct();
       
       $this->load->model("m_front");
     
    }

    public function index()
    {
        $data['data']=$this->m_front->get_all_produk();
        $data["menus"] = $this->m_front->getAll();
        $this->load->view("front/index",$data);
    }

    public function view_menu()
    {
        $id_menu=$this->input->get('id');
        $data=$this->m_front->get_menu_by_id($id_menu);
        echo json_encode($data);
    }
}
 ?>