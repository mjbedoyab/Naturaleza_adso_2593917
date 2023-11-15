<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		//$this->load->model('PersonasModel');
		//$this->load->model('UsuariosModel');
		$this->load->model('ProductosModel');
		$this->load->database();
		$validacion = $this->session->has_userdata("session-mvc");
		if ($validacion) {
			$session = $this->session->userdata("session-mvc");
			if ($session['tipo']=="CLIENTE" && $session['estado']=="ACTIVO") {
				return false;
			}else{
				redirect('Login/cerrarSession','refresh');
				die();
			}
		}else{
			redirect('Login/cerrarSession','refresh');
		}
	}

    public function index(){
		
		
		$data['productos'] = $this->ProductosModel->obtener_productos();
	
		$data['session'] = $this->session->userdata("session-mvc");
		$this->load->view('cliente/inicioCliente', $data);
	}
}