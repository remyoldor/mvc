<?php
// ini_set('display_startup_errors',1);
// ini_set('display_errors',1);
// error_reporting(-1);
//
// require_once('controller/ResourceController.php');
// require_once('model/PDORepository.php');
// require_once('model/ResourceRepository.php');
// require_once('model/Resource.php');
// require_once('view/TwigView.php');
// require_once('view/SimpleResourceList.php');
// require_once('view/Home.php');
//
//
// if(isset($_GET["action"]) && $_GET["action"] == 'listResources'){
//     ResourceController::getInstance()->listResources();
// }else{
//     ResourceController::getInstance()->home();
// }


chdir(dirname(__DIR__));

define ("SYS_PATH", "lib/");
define ("APP_PATH", "app/");

require SYS_PATH."Router.php";
require APP_PATH."http/routes.php";

$url = $_GET["url"];

try {
  $action= Router::getAction($url);

  $controllerName = $action["controller"];
  $method = $action["method"];

  require APP_PATH."controller/".$controllerName."php";

  $controller = new $controllerName();

  $controller->$method();

} catch (Exception $e) {

  echo $e->getMessage();
  
}
