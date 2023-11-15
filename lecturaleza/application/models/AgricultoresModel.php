<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgricultoresModel extends CI_Model {

	public $table = 'agricultores';
    public $table_id = 'id_agricultor';

    public function __construct(){
        $this->load->database();
    }

    

    function find($id_agricultor){
        $this->db->select();
        $this->db->from($this->table);
        $this->db->where($this->table_id, $id_agricultor);

        $query = $this->db->get();
        return $query->row();
    }

    function findAll(){
        $this->db->select();
        $this->db->from($this->table);
       
        $query = $this->db->get();
        return $query->result();
    }

    function insert($data){
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();

    }

    function update($id_agricultor, $data){
        $this->db->where($this->table_id, $id_agricultor);
        $this->db->update($this->table, $data);
       

    }

    function delete($id_agricultor){
        $this->db->where($this->table_id, $id_agricultor);
        $this->db->delete($this->table);
        

    }

	



		
	

}