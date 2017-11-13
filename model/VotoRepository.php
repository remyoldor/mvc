<?php

require_once("./model/PDORepository.php");
require_once("./model/Voto.php");

class VotoRepository extends PDORepository
{

	private static $instance;

	public static function getInstance(){
		if(!isset(self::$instance)){
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function listVotos($seccion, $circuito, $mesa){
		$mapper = function($row){
			return new Voto($row["id"], $row["seccion"], $row["circuito"], $row["mesa"], null);
		};
		// var_dump($seccion, $circuito, $mesa);
		return $this->query("SELECT `a.nombre, v.votos_senadores_nacionales, v.votos_diputados_nacionales, v.votos_senadores_provinciales, v.votos_concejales`
			FROM `votos_agrupaciones v` inner join `agrupacion_politica a` on `a.id = v.agrupacion_politica_id`
			WHERE `v.seccion_codigo` = ? and `v.circuito_codigo` = ?  and `v.mesa_codigo` = ?" ,[$seccion, $circuito, $mesa], $mapper);
	}
}

?>
