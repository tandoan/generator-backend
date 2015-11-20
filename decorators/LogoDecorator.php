<?php
require_once('PageDecorator.php');

class LogoDecorator	extends PageDecorator {
	private function drawLogo(){
		$im = $this->pageToBeDecorated->getImage();
		$logo = imagecreatefrompng('./logo_transparent.png');
		imagecopyresized($im, $logo, (602-45-12), (561-50-8), 0, 0, 45, 50, 172, 191);
	}

	public function draw(){
		parent::draw();
		$this->drawLogo();
	}
}