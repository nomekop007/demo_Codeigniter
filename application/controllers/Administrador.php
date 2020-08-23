<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {


	public function __constructor()
	{
		parent::__constructor();
		$this->load->model("administrador");
	}
	

	public function index()
	{
			//esta creada la session del admin
		if ($this->session->userdata("administrador")) {
			
			$this->load->view("template2/header");
			$this->load->view("administrador/home");
			$this->load->view("template2/footer");
		}else{
			redirect("index");
		}

	}


	//crud PERFIL
	public function insertPerfil()
	{
		$nombre = $this->input->post("nombre");
		$estado = $this->input->post("estado");
		$this->administrador->insertarPerfil($nombre,$estado);
		echo json_encode(array("msg"=>"Perfil creado"));
	}


	public function updatePerfil()
	{
		$id = $this->input->post("id");
		$estado = $this->input->post("estado");
		$this->administrador->editarPerfil($id,$estado);
		echo json_encode(array("msg"=>"Perfil actualizado"));
	}

	public function deletePerfil()
	{
		$id = $this->input->post("id");
		$this->administrador->eliminarPerfil()($id);
		echo json_encode(array("msg"=>"Perfil eliminado"));
	}

	public function perfiles()
	{
		echo json_encode($this->administrador->perfiles());
	}


	//paginas modulos admin (MENU)
	public function perfil()
	{
		//existe sesion?
		if ($this->session->userdata("administrador")) {
		
			$this->load->view("administrador/perfil");
		
		} else {
			redirect("index");
		}
	}

	public function cliente()
	{
		if ($this->session->userdata("administrador")) {
		
			$this->load->view("administrador/cliente");
		
		} else {
			redirect("index");
		}
		
	}

}