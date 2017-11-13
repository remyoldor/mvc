<?php

require_once("./view/IndexView.php");

class IndexController{
	private static $instance;

	public static function getInstance(){
		if(!isset(self::$instance)){
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function showIndex(){
		$view = new IndexView();
		$view->showIndex();
	}

	public function noExiste(){
		$view = new IndexView();
		$view->noExiste();
	}

	public function listAll(){
		$view = new IndexView();
		$view->listAll();
	}
	
}

?>
