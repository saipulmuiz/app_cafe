<?php
class Cart_model extends CI_Model{
 
    function get_all_produk(){
        
        return $this->db->join('menu', 'menu.id_menu = keranjang.id_menu')
					->get('keranjang')
					->result();
    }

    function get_subtot(){
        return $this->db->query("SELECT SUM(sub_total) AS total FROM keranjang")->result();
    }
     
}