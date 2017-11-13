<?php

require_once("./view/TwigView.php");

class IndexView extends TwigView{

	public function showIndex(){
		echo self::getTwig()->render("index.twig.html", array());
	}

	public function sinPermiso(){
		echo self::getTwig()->render("sinpermiso.twig.html", array());
	}

	public function noExiste(){
		echo self::getTwig()->render("noexiste.twig.html", array());
	}

	public function listAll(){
		echo self::getTwig()->render("listall.twig.html", array());
	}

}


?>
