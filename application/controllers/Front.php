<?php 
defined('BASEPATH') OR exit('NO direct script access allowed');

class Front extends CI_Controller {
    public function __construct(){
        parent::__construct();
       
       $this->load->model("Front_model");
     
    }

    public function index()
    {
        $data['data']=$this->Front_model->get_all_produk();
        $data['subtot']=$this->Front_model->get_subtot();
        $data["menus"] = $this->Front_model->getAll();
        $data['qty']=$this->Front_model->CountCart();

        if(!$data['data']){
            $data['status'] = "0";
        }else{
            $data['status'] = "1";
        }

        $this->load->view("front/index",$data);
    }
    // public function menus()
    // {
    // echo json_encode($this->Front_model->getAll());   
    // }
    public function Cart()
    {
        $FrontModel = $this->Front_model;

        echo json_encode($FrontModel->getCart());
    }

    function tambah_keranjang(){ //fungsi Add To Cart
        $id_menu=$this->input->post('id_menu');
        $qty=$this->input->post('qty');
        $harga=$this->input->post('harga');
        $sub_total=$this->input->post('sub_total');
        $data=$this->Front_model->tambah_keranjang($id_menu,$qty,$harga,$sub_total);
        echo json_encode($data);
    }

    function hapus_keranjang(){
        $id_cart=$this->input->post('id_cart');
        $data=$this->Front_model->hapus_keranjang($id_cart);
        echo json_encode($data);
    }

    // function get_keranjang(){
    //     $data=$this->Front_model->get_keranjang();
    //     echo json_encode($data);
    // }

    public function view_menu()
    {
        $id_menu=$this->input->get('id');
        $data=$this->Front_model->get_menu_by_id($id_menu);
        echo json_encode($data);
    }
}
 ?>