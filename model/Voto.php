<?php

class Voto
{

	private $id;
	private $seccion;
	private $circuito;
	private $mesa;


	function __construct($id, $seccion, $circuito, $fecha, $mesa)
	{
		$this->id = $id;
		$this->seccion = $seccion;
		$this->circuito = $circuito;
		$this->mesa = $mesa;
	}

	public function getId(){
		return $this->id;
	}

	public function getSeccion(){
		return $this->seccion;
	}

	public function getCircuito(){
		return $this->circuito;
	}

	public function getMesa(){
		return $this->mesa;
	}

}


?>
