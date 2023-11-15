<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductosModel extends CI_Model {
	public $table = 'productos';
	
	

	// public function getUsuarioByEmail(){
    //     
	// 	$this->db->select("*");
	// 	$this->db->from('productos', $email);
	// 	$registros = $this->db->get('usuarios')->result();

	// 	if (sizeof($registros)!=0) {
	// 		return $registros[0];
	// 	}else{
	// 		return null;
	// 	}
	// }

	// function insert($data1){
    //     $this->db->insert( $this->table, $data1);
    //     return $this->db->insert_id();

    // }

	public function obtener_productos() {
        $this->load->database();
        $query = $this->db->get('productos'); 
        return $query->result(); 
    }

}
