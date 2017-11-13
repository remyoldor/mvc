<?php

class User
{

	private $id;
	private $usuario;
	private $clave;
	private $nombre;
	private $apellido;
	private $mail;

	function __construct($id, $usr, $pass, $name, $lname, $mail)
	{
		$this->id = $id;
		$this->usuario = $usr;
		$this->clave = $pass;
		$this->nombre = $name;
		$this->apellido = $lname;
		$this->mail = $mail;
	}

	public function getId(){
		return $this->id;
	}

	public function getPass(){
		return $this->clave;
	}

	public function getNombre(){
		return $this->nombre;
	}
}

?>
