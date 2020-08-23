<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//el contructor carga el modelo
		public function __construct()
		{
			parent::__construct();
			$this->load->model("usuario");
		}

	
	public function index()
	{
		$this->load->view('template1/header');
		$this->load->view('login');
		$this->load->view('template1/footer');
	}


	public function registrar()
	{
		$this->load->view('template1/header');
		$this->load->view('registrar');
		$this->load->view('template1/footer');
	}

	public function login()
	{
		//obtener los datos del formulario
		$rut = $this->input->post("rut");
		$clave = $this->input->post("clave");
		//extrae el resultado del metodo login() del MODELO login
		$arrayUser = $this->usuario->login($rut,md5($clave));

		if (count($arrayUser) > 0) {
			//pregunta si el perfil es un administrador o no
			if ($arrayUser[0]->perfil == 1) {
				//crear sesion admin
				$this->session->set_userdata("administrador",$arrayUser);
				//devolver mensaje
				echo json_encode(array("msg"=>"administrador"));
			} else {
				
				//crear sesion cliente	
				$this->session->set_userdata("cliente",$arrayUser);
				//responder mensaje
				echo json_encode(array("msg"=>"cliente"));
			}
			
		}else {
			echo json_encode(array("msg"=>"404"));
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect("index");
	}

	public function crearCliente()
	{
		$rut = $this->input->post("rut");
		$nombre = $this->input->post("nombre");
		$apellido = $this->input->post("apellido");
		$telefono = $this->input->post("telefono");
		$email = $this->input->post("email");
		$clave = $this->input->post("clave");

		$path = $_FILES["file"]["tmp_name"];
		//se valida que el archivo sea correcto
		if (is_uploaded_file($path) && !empty($_FILES)) {
			//se cactura la url de la foto
			$foto = file_get_contents($path);

			if ($this->usuario->crearUsuario($rut,$nombre,$apellido,$email,$telefono,md5($clave),$foto)) {
				echo json_encode(array("msg"=>"registro exitoso"));
			} else {
				echo json_encode(array("msg"=>"Error al ingresar"));
			}
			
		}else{
			echo json_encode(array("msg"=>"error de archivo"));
		}

	}

}
