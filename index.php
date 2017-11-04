<?php
// ini_set('display_startup_errors',1);
// ini_set('display_errors',1);
// error_reporting(-1);

require_once('src/controller/ResourceController.php');
require_once('src/model/PDORepository.php');
require_once('src/model/ResourceRepository.php');
require_once('src/model/Resource.php');
require_once('src/view/TwigView.php');
require_once('src/view/SimpleResourceList.php');
require_once('src/view/Home.php');
require_once('src/view/Login.php');

if(isset($_GET["url"])){
  $url = $_GET["url"];
  if ($url == 'listResources') {
    ResourceController::getInstance()->listResources();
  }
  elseif ($url == 'home') {
    ResourceController::getInstance()->home();
  }
  elseif ($url == 'login') {
    ResourceController::getInstance()->login();
  }
}
else {
  ResourceController::getInstance()->login();
}
