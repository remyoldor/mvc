<?php

session_start();
require_once("./controller/IndexController.php");
require_once("./controller/UserController.php");
require_once("./controller/VotoController.php");

if(isset($_REQUEST["action"])){
	if($_REQUEST["action"] == "LogIn"){
		UserController::getInstance()->LogIn();
	}
	elseif($_REQUEST["action"] == "LogOut"){
		UserController::getInstance()->LogOut();
	}
	elseif($_REQUEST["action"] == "listAll"){
		IndexController::getInstance()->listAll();
	}
	elseif($_REQUEST["action"] == "votoIndex"){
		VotoController::getInstance()->showIndex();
	}
	elseif($_REQUEST["action"] == "votolist"){
		VotoController::getInstance()->listVotos();
	}
}
else{
	IndexController::getInstance()->showIndex();
}

/*

Las vulnerabilidades del tipo SQL injection se tratan con el uso de PDO.
Esto se puede ver en QuestionRepository y UserRepository.


Las vulnerabilidades del tipo XSS se tratan escapando cualquier input que ingrese el usuario.
Esto se puede ver en listQuestions.twig.html

*/


?>
