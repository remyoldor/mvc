<?php

require_once("./view/TwigView.php");

class VotoView extends TwigView{

	public function showIndex(){
		echo self::getTwig()->render("indexvoto.twig.html", array());
	}

	public function listVotos($votos){
		echo self::getTwig()->render("listall.twig.html", array("votos" => $votos));
	}

}


?>
