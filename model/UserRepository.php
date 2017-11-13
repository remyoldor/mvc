<?php

require_once("./model/PDORepository.php");
require_once("./model/User.php");

class UserRepository extends PDORepository
{

	private static $instance;

	public static function getInstance(){
		if(!isset(self::$instance)){
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function getUser($name){
		$mapper = function($row){
			return new User($row["id"], $row["usuario"], $row["clave"], $row["nombre"], $row["apellido"], $row["mail"]);
		};
		$answer = $this->query("SELECT * FROM `usuario` WHERE `usuario` = ?", [$name], $mapper);
		if(isset($answer[0])){
			return $answer[0];
		}
		else {
			return null;
		}

	}

	public function getUserById($userId){
		$mapper = function($row){
			return new User($row["id"], $row["usuario"], $row["clave"], $row["nombre"], $row["apellido"], $row["mail"]);
		};
		$answer = $this->query("SELECT * FROM `usuario` WHERE `id` = ?", [$userId], $mapper);
		if(isset($answer[0])){
			return $answer[0];
		}
		else {
			return null;
		}

	}

}

?>
