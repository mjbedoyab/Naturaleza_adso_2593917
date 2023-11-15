<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->helper('form');
		$this->load->helper('url');
        $this->load->model('AgricultoresModel');
        $this->load->database();
		$this->load->database();
		$validacion = $this->session->has_userdata("session-mvc");
		if ($validacion) {
			$session = $this->session->userdata("session-mvc");
			if ($session['tipo']=="ADMIN" && $session['estado']=="ACTIVO") {
				return false;
			}else{
				redirect('Login/cerrarSession','refresh');
				die();
			}
		}else{
			redirect('Login/cerrarSession','refresh');
		}
        
	}
    public function index()
	{
		
		
	}
	public function listaAgricultores()
	{
		$vdata["Agricultor"] = $this->AgricultoresModel->findAll();

		$this->load->view('admin/listaAgricultores', $vdata);
	}
	public function crearAgricultores($id_agricultor = null)
	{
        	

		$vdata["cedula"] = $vdata["nombre"] = $vdata["apellido"] = $vdata["direccion"] = $vdata["telefono"] = "";
		if (isset($id_agricultor)) {
			$AgricultoresModel = $this->AgricultoresModel->find($id_agricultor);

			if (isset($AgricultoresModel)) {
				$vdata["cedula"]= $AgricultoresModel->cedula;
				$vdata["nombre"]= $AgricultoresModel->nombre;
				$vdata["apellido"]= $AgricultoresModel->apellido;
				$vdata["direccion"]= $AgricultoresModel->direccion;
                $vdata["telefono"]= $AgricultoresModel->telefono;

			}
		}

        if($this->input->server("REQUEST_METHOD")== "POST"){

		    $data["cedula"] = $this->input->post("cedula");
            $data["nombre"] = $this->input->post("nombre");
            $data["apellido"] = $this->input->post("apellido");
			$data["direccion"] = $this->input->post("direccion");
            $data["telefono"] = $this->input->post("telefono");


			$vdata["cedula"] = $this->input->post("cedula");
            $vdata["nombre"] = $this->input->post("nombre");
            $vdata["apellido"] = $this->input->post("apellido");
			$vdata["direccion"] = $this->input->post("direccion");
            $vdata["telefono"] = $this->input->post("telefono");


			if (isset($id_agricultor)) {

				$this->AgricultoresModel->update($id_agricultor, $data);
			}else {

				$this->AgricultoresModel->insert($data);
			
			}
		}
		$this->load->view('admin/crearAgricultores', $vdata);

            

	}

	public function ver($id_agricultor = null)
	{
		$AgricultoresModel = $this->AgricultoresModel->find($id_agricultor);

		if (isset($AgricultoresModel)) {

			$vdata["cedula"]= $AgricultoresModel->cedula;
            $vdata["nombre"]= $AgricultoresModel->nombre;
            $vdata["apellido"]= $AgricultoresModel->apellido;
            $vdata["direccion"]= $AgricultoresModel->direccion;
            $vdata["telefono"]= $AgricultoresModel->telefono;

		}else {
			$vdata["cedula"] = $vdata["nombre"] = $vdata["apellido"] = $vdata["direccion"] = $vdata["telefono"] = "";

		}
		$this->load->view('admin/ver', $vdata);
	}

    public function borrar($id_agricultor = null)
	{
		$this->Producto->delete($id_agricultor);
		redirect("/admin/listaAgricultores");
	}
}