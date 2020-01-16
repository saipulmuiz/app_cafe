<?php defined ('BASEPATH') OR exit(' No Direct Script access allowed');

class m_user extends CI_model{
    private $_table = "user";
   // id_user	nama_user	username	password	level	created_at	update_at
    public $id_user;
    public $nama_user;
    public $username;
    public $password;
    public $level;
   
    public $created_at;
    public $update_at;
    
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
        return $this->db->get_where($this->_table,["id_user" => $id])->row();
    }
    public function getAllsales($id){
        $this->db->select('*');
        $this->db->from("agen");
        $this->db->join('petugas','agen.idsales=petugas.idpetugas');
        $this->db->where("idsales = '$id' ");
        
        $query = $this->db->get();
        return $query->result();
    }
  
    
    public function save(){
    
        $post = $this->input->post();
      
        $this->nama_user = $post["nama_user"];
        $this->username= $post["username"];
        $this->password = md5($post["password"]);
        $this->created_at = date('Y-m-d');
        $this->update_at = date('Y-m-d');
        $this->level = $post["level"];
      
        $this->db->insert($this->_table, $this);
    }

   

    public function edit(){
        
        $post = $this->input->post();
        $this->id_user = $post["id_user"];
        $this->nama_user = $post["nama_user"];
        $this->username= $post["username"];
        $this->password = $post["password"];
        $this->created_at = $post["tgl"];
        $this->update_at = date('Y-m-d');
        $this->level = $post["level"];
        $this->db->update($this->_table, $this,array('id_user'=> $post['id_user']));
    }

    public function delete($id){
       
       
        return $this->db->delete($this->_table, array("id_user"=> $id));
    }
   
}