<?php defined ('BASEPATH') OR exit(' No Direct Script access allowed');

class Front_model extends CI_model{
    private $_table = "menu";
   // id_menu	nama_menu	kategori	harga	foto	deskripsi	created_at	update_At
    public $id_menu;
    public $nama_menu;
    public $kategori;
    public $harga;
    public $foto;
    public $deskripsi;
    public $created_at;
    public $update_At;
    
    public function rules(){
        return [
        ['field'=> 'namasekolah',
             'label'=> 'namasekolah',
             'rules' => 'required'
        ],
      
    ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getByid($id){
        return $this->db->get_where($this->_table,["id_menu" => $id])->row();
    }

    public function getCart()
    {
        return $this->db->query("SELECT * FROM keranjang INNER JOIN menu ON menu.id_menu=keranjang.id_menu")->result_array();
    }
    public function CountCart()
    {
        return $this->db->query("SELECT count(keranjang.id_menu) as jumlah FROM keranjang")->result_array();
    }
    function get_all_produk(){
        return $this->db->join('menu', 'menu.id_menu = keranjang.id_menu')
					->get('keranjang')
                    ->result();
    }

    function get_subtot(){
        return $this->db->query("SELECT SUM(sub_total) AS total FROM keranjang")->result();
    }

    function hapus_keranjang($id_cart){
        $hasil=$this->db->query("DELETE FROM keranjang WHERE id_cart='$id_cart'");
        return $hasil;
    }

    function tambah_keranjang($id_menu,$qty,$harga,$sub_total){
        	$hasil=$this->db->query("INSERT INTO keranjang (id_menu,qty,harga,sub_total)VALUES('$id_menu','$qty','$harga','$sub_total')");
        	return $hasil;
        }

    function get_keranjang(){
            $hsl=$this->db->query("SELECT * FROM keranjang");
            if($hsl->num_rows()>0){
                foreach ($hsl->result() as $data) {
                    $hasil=array(
                        'id_menu' => $data->id_menu,
                        'qty' => $data->qty,
                        'harga' => $data->harga,
                        );
                }
            }
            return $hasil;
        }

        function get_notrans(){
            return $this->db->query("SELECT * FROM transaksi_head ORDER BY id_transaksi DESC LIMIT 1")->row_array();
        }

        // public function view_all(){
        //     $this->db->select('*');
        //     $this->db->from('transaksi_head'); 
        //     $this->db->join('transaksi_det', 'transaksi_det.id_transaksi=transaksi_head.id_transaksi');
            
        //     return $this->db->get()->result(); // Tampilkan semua data tbl_pakan_masuk
        //   }

    function get_menu_by_id($id_menu){
        $hsl=$this->db->query("SELECT * FROM menu WHERE id_menu='$id_menu'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_menu' => $data->id_menu,
                    'nama_menu' => $data->nama_menu,
                    'kategori' => $data->kategori,
                    'harga' => $data->harga,
                    'foto' => $data->foto,
                    'deskripsi' => $data->deskripsi,
                    );
            }
        }
        return $hasil;
    }
   
}