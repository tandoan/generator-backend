<?php
require_once('PageDecorator.php');

class TextBorderDecorator extends PageDecorator {
	private function drawBorders(){
		$orange = $this->pageToBeDecorated->getHilightColor();
		$im = $this->pageToBeDecorated->getImage();
		imageline($im, 0, 399, 602, 399 , $orange);
		imageline($im, 0, 400, 602, 400 , $orange);

		imageline($im, 29, 400, 29, 562 , $orange);
		imageline($im, 30, 400, 30, 562 , $orange);

		imageline($im, 30, 561, 602, 561 , $orange);
		imageline($im, 30, 562, 602, 562 , $orange);	
	}

	public function draw(){
		parent::draw();
		$this->drawBorders();
	}
} 