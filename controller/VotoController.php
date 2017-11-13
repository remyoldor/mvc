<?php

require_once("./model/VotoRepository.php");
require_once("./view/VotoView.php");

class VotoController{
	private static $instance;

	public static function getInstance(){
		if(!isset(self::$instance)){
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function showIndex(){
		$view = new VotoView();
		$view->showIndex();
	}

	public function listVotos(){
		if (isset($_POST["seccion"]) && isset($_POST["circuito"]) && isset($_POST["mesa"])) {
			$seccion = $_POST["seccion"];
			$circuito = $_POST["circuito"];
			$mesa = $_POST["mesa"];

			$votos = VotoRepository::getInstance()->listVotos($seccion, $circuito, $mesa);

			$view = new VotoView();
			$view->listVotos($votos);

		}
	}
}

?>
