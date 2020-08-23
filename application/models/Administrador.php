<?php

class Administrador extends CI_Model {

	//crud de perfil
	public function insertarPerfil($nombre ,$estado)
	{
		$data = array("nombre"=>$nombre,"estado"=>$estado);
		return $this->db->insert("perfil,$data");

	}
	public function editarPerfil($id,$estado)
	{
		$this->db->where("idperfil",$id);
		$data = array("estado"=>$estado);
		
		return $this->db->update("perfil",$data);
	}

	public function eliminarPerfil($id)
	{
		$this->db->where("idperfil",$id);
		return $this->db->delete("perfil");
	}

	public function perfiles()
	{
		return $this->db->get("perfil")->result();
	}
	
	//crud del cliente

	//crud del productor


	//crud...
}
