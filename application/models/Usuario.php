<?php

class Usuario extends CI_Model{
	

	public function login($rut , $clave)
	{
		$this->db->where("rut",$rut);
		$this->db->where("clave",$clave);

		return $this->db->get("usuario")->result();
		
	}

	public function crearUsuario($rut, $nombre,$apellido, $mail,$telefono, $clave,$foto)
	{
		$data = array(
			"rut"=>$rut,
			"nombre"=>$nombre,
			"apellido"=>$apellido,
			"mail"=>$mail,
			"telefono"=>$telefono,
			"perfil"=>2,
			"clave"=>$clave,
			"foto"=>$foto
		);
		
		return $this->db->insert("usuario",$data);
	}

}


?>
