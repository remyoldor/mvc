<?php

require_once("./controller/IndexController.php");
require_once("./model/UserRepository.php");


class UserController{
	private static $instance;

	public static function getInstance(){
		if(!isset(self::$instance)){
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function LogIn(){
		$success = false;
		if(isset($_POST["user"]) and isset($_POST["pswd"])){
			$user = UserRepository::getInstance()->getUser($_POST["user"]);
			if($user != null){
				if($user->getPass() == $_POST["pswd"]){
					$success = true;
					$_SESSION["userId"] = $user->getId();
				}
			}
		}
		if($success)
		{
			IndexController::getInstance()->listAll();
		}
		else{
			IndexController::getInstance()->noExiste();
		}
	}

	public function LogOut(){
		unset($_SESSION["userId"]);
		IndexController::getInstance()->showIndex();
	}


	public function getUserById($userId){
		return UserRepository::getInstance()->getUserById($userId);
	}
}

?>
