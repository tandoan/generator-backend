<?php
require_once('PageDecorator.php');

class MetaTextDecorator	extends PageDecorator {
	private function drawMeta(){
		$im = $this->pageToBeDecorated->getImage();
		$color = $this->pageToBeDecorated->getFontColor();
		$fontfile = 'fonts/rubik/Rubik-Regular.ttf';
		$x = 0;
		$y = 404;

		$boundingBox = imageftbbox(10, 0, $fontfile, $this->text);
		$pageWidth = 602; 
		$padding = 8;

		$y = $y + abs($boundingBox[7] - $boundingBox[1]);
		$x = $pageWidth - $padding - ($boundingBox[2] - $boundingBox[0]);
		imagettftext ( $im , 10 , 0, $x , $y , $color , $fontfile , $this->text);
	}

	public function __construct($pageToBeDecorated, $text) {
		$this->pageToBeDecorated = $pageToBeDecorated;
		$this->text = $text;
	}

	public function draw(){
		parent::draw();
		$this->drawMeta();
	}
}