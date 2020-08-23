<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {


	public function __constructor()
	{
		parent::__constructor();
	}
	

	public function index()
	{
		//esta creada la session del cliente
		if ($this->session->userdata("cliente")) {
		
			$this->load->view("template2/header");
			$this->load->view("cliente/home");
			$this->load->view("template2/footer");
		}else{
			redirect("index");
		}
	
	}
}