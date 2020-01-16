<?php defined ('BASEPATH') OR exit(' No Direct Script access allowed');

class m_menu extends CI_model{
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
    public function getAllsales($id){
        $this->db->select('*');
        $this->db->from("agen");
        $this->db->join('petugas','agen.idsales=petugas.idpetugas');
        $this->db->where("idsales = '$id' ");
        
        $query = $this->db->get();
        return $query->result();
    }
  
    public function getkode(){
        $cari = $this->db->query("SELECT max(id_menu) as kode from menu")->row();
        $ambil = $cari;
        $nomor = (int) substr($ambil->kode , 1,3 );
        $nomor++;
        $char = "M";
        $kode = $char.sprintf("%03s",$nomor);
        return $kode;
    }
    public function save(){
        $post = $this->input->post();
        $this->id_menu = $post["id_menu"];
        $this->harga = $post["harga"];
        $this->nama_menu= $post["nama"];
        $this->kategori = $post["kategori"];
        $this->created_at = date('Y-m-d');
        $this->update_At = date('Y-m-d');
        $this->deskripsi = $post["deskripsi"];
        $this->foto = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
	{
		$config['upload_path']          = './upload/menu/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->id_menu;
		$config['overwrite']			= true;
		$config['max_size']             = 5094; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

	private function _deleteImage($id)
	{
		$product = $this->getById($id);
		if ($product->image != "default.jpg") {
			$filename = explode(".", $product->idagen)[0];
			return array_map('unlink', glob(FCPATH."upload/menu/$filename.*"));
		}
	}

    public function edit(){
        
        $post = $this->input->post();
        $this->id_menu = $post["id_menu"];
        $this->harga = $post["harga"];
        $this->nama_menu= $post["nama"];
        $this->kategori = $post["kategori"];
        $this->created_at = $post["tgl"];
        $this->update_At = date('Y-m-d');
        $this->deskripsi = $post["deskripsi"];

        if (!empty($_FILES["image"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["oldimage"];
        }
        $this->db->update($this->_table, $this,array('id_menu'=> $post['id_menu']));
    }

    public function delete($id){
       
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_menu"=> $id));
    }
   
}