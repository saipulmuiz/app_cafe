<?php
class m_cart extends CI_Model{
 
    function get_all_produk(){
        
        return $this->db->join('menu', 'menu.id_menu = keranjang.id_menu')
					->get('keranjang')
					->result();
    }
     
}