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
        $data['subtot']=$this->m_front->get_subtot();
        $data["menus"] = $this->m_front->getAll();
        $this->load->view("front/index",$data);
    }

    function tambah_keranjang(){ //fungsi Add To Cart
        $id_menu=$this->input->post('id_menu');
        $qty=$this->input->post('qty');
        $harga=$this->input->post('harga');
        $sub_total=$this->input->post('sub_total');
        $data=$this->m_front->tambah_keranjang($id_menu,$qty,$harga,$sub_total);
        echo json_encode($data);
    }

    function hapus_keranjang(){
        $id_cart=$this->input->post('id_cart');
        $data=$this->m_front->hapus_keranjang($id_cart);
        echo json_encode($data);
    }

    // function get_keranjang(){
    //     $data=$this->m_front->get_keranjang();
    //     echo json_encode($data);
    // }

    public function view_menu()
    {
        $id_menu=$this->input->get('id');
        $data=$this->m_front->get_menu_by_id($id_menu);
        echo json_encode($data);
    }
}
 ?>