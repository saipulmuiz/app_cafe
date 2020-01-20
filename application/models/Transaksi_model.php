<?php defined ('BASEPATH') OR exit(' No Direct Script access allowed');

class Transaksi_model extends CI_model{
    private $_table = "transaksi_head";
   // id_transaksi	nama_transaksi	kategori	harga	foto	deskripsi	created_at	update_At
    public $id_transaksi;
    public $nama_pemesan;
    public $email;
    public $no_hp;
    public $status_pemesanan;
    
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
        return $this->db->get_where($this->_table,["id_transaksi" => $id])->row();
    }
  
    public function getkode(){
        $cari = $this->db->query("SELECT max(id_transaksi) as kode from transaksi")->row();
        $ambil = $cari;
        $nomor = (int) substr($ambil->kode , 1,3 );
        $nomor++;
        $char = "M";
        $kode = $char.sprintf("%03s",$nomor);
        return $kode;
    }

    public function bayar(){
        $post = $this->input->post();
        $data= array(
            'bayar' => htmlspecialchars($post["bayar"], ENT_QUOTES),
            'kembali' => htmlspecialchars($post["kembali"], ENT_QUOTES),
            'status_pemesanan' => "Sudah Dibayar"
        );

       
        $this->db->where('id_transaksi',$post['id_transaksi']);
        $this->db->update($this->_table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_transaksi"=> $id));
    }
   
}