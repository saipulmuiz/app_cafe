<?php
class Checkout_model extends CI_Model{
    private $_table = "transaksi_head";
    private $_table_det = "transaksi_det";
   // id_menu	nama_menu	kategori	harga	foto	deskripsi	created_at	update_At
    public $id_transaksi;
    public $nama_pemesan;
    public $email;
    public $no_hp;
    public $status_pemesanan;
 
    function get_all_produk(){
        
        return $this->db->join('menu', 'menu.id_menu = keranjang.id_menu')
					->get('keranjang')
					->result();
    }

    function get_subtot(){
        return $this->db->query("SELECT SUM(sub_total) AS total FROM keranjang")->result();
    }

    public function save($data=array()){
        $this->db->insert($this->_table, $data);
    }

    public function save_detail($data=array())
    {
        return $this->db->insert($this->_table_det,$data);
    }

    public function DelCart(){
        return $this->db->query('delete from keranjang');
    }
     
}